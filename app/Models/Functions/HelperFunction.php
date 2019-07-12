<?php

namespace App\Models\Functions;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use File;
use Image;
use Storage;
class HelperFunction extends Model
{
    public static function uploadAnything($file, $name, $pathDirectory, $saveDatabaseAttribute){
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

    public static function signAnything($WhatAreYouSigning, $idOfWhatsigningWhat, $organizationType, $organizationId)
    {
        $morphMap = Relation::morphMap();
        $class = $WhatAreYouSigning;
        $className = ($morphMap[$class]);
        $table = new $className;
        // dd($field->where('id', 1)->get());

        $signItem = $table::where('identifier', $id)->first();

        $checkIfAlreadySigned = AuthorizationSignature::where('signable_type', $WhatAreYouSigning)
            ->where('signable_id',  $signItem->id)
            ->where('organizationable_type', $organizationType)
            ->where('organizationable_id',  auth()->user()->userable->id)
            ->where('operator_user_id',  $signItem->id)
            ->first();

        if($checkIfAlreadySigned == null){
            return [
                'status' => 'error',
                'message' => 'The '.$WhatAreYouSigning.' is already signed by you',
            ];
        }

        if($signItem->id){
            $checkCheckHowManyAlreadySigned = AuthorizationSignature::where('signable_type', $WhatAreYouSigning)
                ->where('signable_id',  $signItem->id)->first()
                ->where('organizationable_type', $organizationType)
                ->where('organizationable_id',  auth()->user()->userable->id);
        }

        if($checkCheckHowManyAlreadySigned->count() >= auth()->user()->userable->hcp_signatories){
            return [
                'status' => 'error',
                'message' => 'The '.$WhatAreYouSigning.' has already been signed by authorized signatories',
            ];
        }

        $sign = new AuthorizationSignature;
        $sign->operator_user_id = auth()->user()->id;
        $sign->signable_type = $WhatAreYouSigning;
        $sign->signable_id = $signItem->id;
        $sign->organizationable_type = $organizationType;
        $sign->organizationable_id = auth()->user()->userable->id;
        $sign->save();

        return [
            'status' => 'success',
            'message' => 'The '.$WhatAreYouSigning.' was sucessfully signed by '. auth()->user()->name,
        ];
    }
}
