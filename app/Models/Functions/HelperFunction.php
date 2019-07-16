<?php

namespace App\Models\Functions;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use File;
use Image;
use Storage;
use App\Models\Disbursement;
use App\Models\Claim;

class HelperFunction extends Model
{
    public static function uploadAnything($file, $name, $pathDirectory, $signItemDatabaseAttribute){
    	$image = $file;
        $filename = $name . '.' . $image->getClientOriginalExtension();

        $directory = $pathDirectory;
        $path = $directory . $filename;

        if(!File::exists($directory)) {
            // path does not exist
            File::makeDirectory($directory, $mode = 0777, true, true);
        }

		list($width, $height, $type, $attr) = getimagesize($image);

		if($width < $height)
		{
        	Image::make($image)->resize(250, 400)->save($path);
		}else{
        	Image::make($image)->resize(400, 250)->save($path);
		}

        return $path;
    }

    public static function signAnything($WhatAreYouSigning, $idOfWhatsigningWhat, $organizationType, $organizationId, $action)
    {
        $morphMap = Relation::morphMap();
        $class = $WhatAreYouSigning;
        $className = ($morphMap[$class]);
        $table = new $className;

        $signItem = $table::where('identifier', $idOfWhatsigningWhat)->first();

        $checkIfAlreadySigned = AuthorizationSignature::where('signable_type', $WhatAreYouSigning)
            ->where('signable_id',  $signItem->id)
            ->where('organizationable_type', $organizationType)
            ->where('organizationable_id',  auth()->user()->userable->id)
            ->where('operator_user_id',  $signItem->id)
            ->first();

        if($checkIfAlreadySigned == null){
            return [
                'status' => 'error',
                'process' => 'signedPreviously',
                'message' => 'The '.$WhatAreYouSigning.' is already signed by you',
            ];
        }

        if($signItem->id){
            $CheckHowManyAlreadySigned = AuthorizationSignature::where('signable_type', $WhatAreYouSigning)
                ->where('signable_id',  $signItem->id)->first()
                ->where('organizationable_type', $organizationType)
                ->where('organizationable_id',  auth()->user()->userable->id)
                ->get();
        }

        if($CheckHowManyAlreadySigned->count() >= auth()->user()->userable->hcp_signatories){
            $signItem->hmo_signature_approvals = 'verified';
            $signItem->save();
            return [
                'status' => 'error',
                'process' => 'alreadySigned',
                'message' => 'The '.$WhatAreYouSigning.' has already been signed by authorized signatories',
            ];
        }

        if($organizationType == 'hmo' && $signItem->hcp->hasAccount($hcp->hcp_id) == 'no'){
            $signItem->hmo_signature_approvals =+ 1;
            $signItem->hcp_signature_approvals =+ 1;
            $signItem->save();
        }elseif($organizationType == 'hmo'){
            $signItem->hmo_signature_approvals =+ 1;
            $signItem->save();
        }elseif($organizationType == 'hcp'){
            $signItem->hcp_signature_approvals =+ 1;
            $signItem->save();
        }


        if($signItem->hmo_signature_approvals >= auth()->user()->userable->hmo_signatories && $signItem->hcp->hasAccount($hcp->hcp_id) == 'no'){
            $signItem->hcp_signature_approvals = 'verified';
            $signItem->hmo_signature_approvals = 'verified';
            $signItem->save();

            // if the model to be verified is a claim as the above condition
            if($className == 'Claim'){
                $signItem->initiation_disbursment = "verified";
                $signItem->save();
                
                $checkDisbursement = Disbursement::where('hmo_id', auth()->user()->userable->id)
                                                    ->('hcp_id', $className->hcp_id)
                                                    // ->('month', $className->hcp_id)
                                                    // ->('year', $className->hcp_id)
                                                    ->('hmo_signature_status', 'pending');
                                                    // ->('created_at', Carbon::);
                if($checkDisbursement == null){
                    $disbursement = new Disbursement;
                    $disbursment->hcp_id = $className->hcp_id;
                    $disbursment->hmo_id = auth()->user()->userable->id;
                    $disbursment->remittance = 1;
                    $disbursment->amount = $className->amount;
                    $disbursment->save();
                }else{
                    $checkDisbursement->amount += $className->amount;
                    $checkDisbursement->remittance += 1;
                    $checkDisbursement->save();
                }
            }
        }elseif($signItem->hmo_signature_approvals >= auth()->user()->userable->hmo_signatories){
            $signItem->hcp_signature_approvals = 'verified';
            $signItem->save();
        }elseif($signItem->hcp_signature_approvals >= auth()->user()->userable->hcp_signatories){
            $signItem->hmo_signature_approvals = 'verified';
            $signItem->save();
        }

        $sign = new AuthorizationSignature;
        $sign->operator_user_id = auth()->user()->id;
        $sign->signable_type = $WhatAreYouSigning;
        $sign->signable_id = $signItem->id;
        $sign->action = $action;
        $sign->organizationable_type = $organizationType;
        $sign->organizationable_id = auth()->user()->userable->id;
        $sign->save();

        return [
            'status' => 'success',
            'process' => 'currentlySigned',
            'message' => 'The '.$WhatAreYouSigning.' was sucessfully signed by '. auth()->user()->name,
        ];
    }
}
