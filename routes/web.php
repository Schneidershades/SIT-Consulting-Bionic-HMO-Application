<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/js/tariff', 'HMO\tariffController@tariffApi');
Route::get('/js/hmo/enrollees', 'HMO\BillController@getHcp')->name('get.hmo.enrollees');

Route::get('/js/hmo/all/enrollees', 'HMO\BillController@getAllEnrollees')->name('get.enrollees');
Route::get('/js/enrollees/hcp/{enrollee_id}', 'HMO\BillController@getEnrolleeHcp')->name('get.enrollee.hcp');
Route::get('/js/hcp/agreements/{hcp_id}', 'HMO\BillController@getHmoAgreementWithHcp')->name('get.hcp.agreements');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/hmo', 'middleware' => ['auth', 'hmo']],  function(){
	
	Route::resource('/enrollees', 'HMO\EnrolleeController');
	Route::get('/enrollees/delete/{id}', 'HMO\EnrolleeController@destroy')->name('enrollees.delete');
	Route::post('/enrollees/update/{id}', 'HMO\EnrolleeController@update')->name('enrollees.update');

	Route::get('/enrollees/transfers/requests', 'HMO\EnrolleeController@allEnrolleeHcpTransfers')->name('enrollees.hcp.transfers.requests');
	Route::get('/enrollees/change/hcp/', 'HMO\EnrolleeController@changeEnrolleeHcp')->name('enrollees.change.hcp');
	Route::post('/enrollees/change/hcp/', 'HMO\EnrolleeController@changeHcpStore')->name('enrollees.change.hcp.store');
	Route::get('/enrollees/change/hcp/request/', 'HMO\EnrolleeController@pendingEnrolleeHcpChangeRequest')->name('enrollees.change.hcp.request');
	Route::get('/enrollees/change/hcp/show/request/{id}', 'HMO\EnrolleeController@showEnrolleeHcpChangeRequest')->name('enrollees.change.hcp.show.request');
	Route::get('/enrollees/change/hcp/cancel/request/{id}', 'HMO\EnrolleeController@cancelRequest')->name('enrollees.change.hcp.cancel.request');
	Route::get('/enrollees/change/hcp/verify/request/{id}', 'HMO\EnrolleeController@verifyRequest')->name('enrollees.change.hcp.verify.request');

	Route::resource('/plans', 'HMO\HealthCarePlanController');
	Route::get('/plans/delete/{id}', 'HMO\HealthCarePlanController@destroy')->name('plans.delete');
	Route::post('/plans/update/{id}', 'HMO\HealthCarePlanController@update')->name('plans.update');
	Route::get('/plans/delete/feature/{id}', 'HMO\HealthCarePlanController@destroyDrugsOrtariffFeatures')->name('healthPlanService.delete');

	Route::resource('/staff', 'HMO\StaffController');
	Route::get('/staff/delete/{id}', 'HMO\StaffController@destroy')->name('staff.delete');
	Route::post('/staff/update/{id}', 'HMO\StaffController@update')->name('staff.update');

	Route::resource('/hcps', 'HMO\HcpController');
	Route::get('/hcps/delete/{id}', 'HMO\HcpController@destroy')->name('hcps.delete');
	Route::post('/hcps/update/{id}', 'HMO\HcpController@update')->name('hcps.update');

	Route::resource('/bills', 'HMO\BillController');
	Route::get('/bill/enrollee', 'HMO\BillController@start')->name('bills.start');
	Route::post('/bill/enrollee', 'HMO\BillController@storeEnrollee')->name('bills.store.enrollee');
	Route::get('/bill/enrollee/{identifier}', 'HMO\BillController@continueBill')->name('bills.continue');
	Route::post('/bill/enrollee/{identifier}', 'HMO\BillController@continueBillStore')->name('bills.continue.store');
	Route::get('/bills/delete/{id}', 'HMO\BillController@destroy')->name('bills.delete');
	Route::post('/bills/update/{id}', 'HMO\BillController@update')->name('bills.update');


	Route::get('/bills/pre-authorization/all/transactions', 'HMO\PreAuthorizationController@index')->name('pre-authorization.index');
	Route::get('/bills/pre-authorization/pending/transactions', 'HMO\PreAuthorizationController@pending')->name('pre-authorization.pending');
	Route::get('/bills/pre-authorization/verify/transaction/{id}', 'HMO\PreAuthorizationController@verify')->name('pre-authorization.verify');
	Route::get('/bills/pre-authorization/cancel/transaction/{id}', 'HMO\PreAuthorizationController@cancel')->name('pre-authorization.cancel');
	Route::get('/bills/pre-authorization/show/transaction/{id}', 'HMO\PreAuthorizationController@show')->name('pre-authorization.show');

	Route::resource('/cash', 'HMO\CashController');
	Route::get('/cash/delete/{id}', 'HMO\CashController@destroy')->name('cash.delete');
	Route::post('/cash/update/{id}', 'HMO\CashController@update')->name('cash.update');

	Route::resource('/assessments', 'HMO\AssessmentController');
	Route::get('/assessments/delete/{id}', 'HMO\AssessmentController@destroy')->name('assessments.delete');
	Route::post('/assessments/update/{id}', 'HMO\AssessmentController@update')->name('assessments.update');

	Route::resource('/hmo-tariffs', 'HMO\TariffController');
	Route::get('/hmo-tariffs/delete/{id}', 'HMO\TariffController@destroy')->name('hmo-tariffs.delete');
	Route::resource('/hmo-drugs', 'HMO\DrugController');
	Route::get('/hmo-drugs/delete/{id}', 'HMO\DrugController@destroy')->name('hmo-drugs.delete');
	// Route::get('/rate', 'HMO\RateController@index')->name('hmo.rates');
	// 
	Route::resource('/hmo-disease-classes', 'HMO\DiseaseClassController');
	Route::get('/hmo-disease-classes/delete/{id}', 'HMO\DiseaseClassController@destroy')->name('hmo-disease-classes.delete');

	Route::resource('/capitations', 'HMO\CapitationController');
	Route::get('/capitations/delete/{id}', 'HMO\CapitationController@destroy')->name('capitations.delete');
	Route::post('/capitations/update/{id}', 'HMO\CapitationController@update')->name('capitations.update');

	Route::get('/capitations/raise/save/hcp', 'HMO\CapitationController@raiseCreateCapitation')->name('capitations.raise.start');
	Route::post('/capitations/raise/save/hcp', 'HMO\CapitationController@raiseCapitation')->name('capitations.raise.save');

	Route::resource('/encounters', 'HMO\EncounterController');
	Route::get('/encounters/delete/{id}', 'HMO\EncounterController@destroy')->name('encounters.delete');
	Route::post('/encounters/update/{id}', 'HMO\EncounterController@update')->name('encounters.update');

	Route::resource('/claims', 'HMO\ClaimController');
	Route::resource('/users', 'HMO\UserController');
	Route::resource('/settings/payment', 'HMO\PaymentController');

	Route::post('/create-hcps-account', 'HMO\HcpController@createHcpAccount')->name('create.hcps.account');
	Route::post('/set-payment-mechanism', 'HMO\HcpController@setPaymentMechanism')->name('set.payment.mechanism');

	Route::resource('/agreements', 'HMO\AgreementController');
	Route::get('/agreements/delete/{id}', 'HMO\AgreementController@destroy')->name('agreements.delete');
	Route::post('/agreements/update/{id}', 'HMO\AgreementController@update')->name('agreements.update');

});

Route::group(['prefix' => '/hcp', 'middleware' => ['auth', 'hcp']],  function(){


	Route::resource('/hcp-agreements', 'HCP\AgreementController')->only([
	    'index'
	]);;
	
	Route::resource('/hcp-enrollee-bills', 'HCP\BillController');
	Route::get('/hcp-enrollee-bills/enrollee/start', 'HCP\BillController@start')->name('hcp-enrollee-bills.start');
	Route::post('/hcp-enrollee-bills/enrollee/start', 'HCP\BillController@storeEnrollee')->name('hcp-enrollee-bills.store.enrollee');
	Route::get('/hcp-enrollee-bills/enrollee/{identifier}', 'HCP\BillController@continueBill')->name('hcp-enrollee-bills.continue');
	Route::post('/hcp-enrollee-bills/enrollee/{identifier}', 'HCP\BillController@continueBillStore')->name('hcp-enrollee-bills.continue.store');
	Route::get('/hcp-enrollee-bills/delete/{id}', 'HCP\BillController@destroy')->name('hcp-enrollee-bills.delete');



	Route::get('/hcp-enrollees/transfers/{id}', 'HCP\EnrolleeController@showTransferInfo')->name('hcp.enrollees.transfers.show');
	Route::get('/hcp-enrollees/incoming/transfers/', 'HCP\EnrolleeController@pendingIncomingTransferRequest')->name('hcp.enrollees.incoming.transfers');
	Route::get('/hcp-enrollees/outgoing/transfers/', 'HCP\EnrolleeController@pendingOutgoingTransferRequest')->name('hcp.enrollees.outgoing.transfers');
	Route::get('/hcp-enrollees/verify/incoming/request/{id}', 'HCP\EnrolleeController@verifyCheckinIncomingTransferRequest')->name('hcp.enrollees.verify.incoming.transfers');


	Route::get('/hcp-bills/pre-authorization/all/transactions', 'HCP\PreAuthorizationController@index')->name('hcp-pre-authorization.index');
	Route::get('/hcp-bills/pre-authorization/pending/transactions', 'HCP\PreAuthorizationController@pending')->name('hcp-pre-authorization.pending');


	Route::resource('/hcp-enrollees', 'HCP\EnrolleeController')->only([
	    'index', 'show',
	]);
	Route::resource('/hcp-hmos', 'HCP\HmoController');
	Route::resource('/hcp-assessments', 'HCP\AssessmentController');
	Route::get('/hcp-tariffs', 'HCP\tariffController@index')->name('hcp.tariffs');
	Route::get('/hcp-rates', 'HCP\RateController@index')->name('hcp.rates');
	Route::get('/hcp-drugs', 'HCP\DrugController@index')->name('hcp.drugs');
	Route::resource('/hcp-capitations', 'HCP\CapitationController');
	Route::resource('/hcp-encounters', 'HCP\EncounterController');
	Route::resource('/hcp-claims', 'HCP\ClaimController');
});

