<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/js/tariff', 'HMO\tariffController@tariffApi');


Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => '/hmo', 'middleware' => ['hmo']],  function(){
	
	Route::resource('/enrollees', 'HMO\EnrolleeController');
	Route::get('/enrollees/delete/{id}', 'HMO\EnrolleeController@destroy')->name('enrollees.delete');
	Route::post('/enrollees/update/{id}', 'HMO\EnrolleeController@update')->name('enrollees.update');

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
	Route::get('/bills/delete/{id}', 'HMO\BillController@destroy')->name('bills.delete');
	Route::post('/bills/update/{id}', 'HMO\BillController@update')->name('bills.update');

	Route::resource('/cash', 'HMO\CashController');
	Route::get('/cash/delete/{id}', 'HMO\CashController@destroy')->name('cash.delete');
	Route::post('/cash/update/{id}', 'HMO\CashController@update')->name('cash.update');

	Route::resource('/assessments', 'HMO\AssessmentController');
	Route::get('/assessments/delete/{id}', 'HMO\AssessmentController@destroy')->name('assessments.delete');
	Route::post('/assessments/update/{id}', 'HMO\AssessmentController@update')->name('assessments.update');

	Route::resource('/hmo-tariffs', 'HMO\tariffController');
	Route::get('/hmo-tariffs/delete/{id}', 'HMO\HcpController@destroy')->name('hmo-tariffs.delete');
	Route::resource('/hmo-drugs', 'HMO\DrugController');
	Route::get('/hmo-drugs/delete/{id}', 'HMO\DrugController@destroy')->name('hmo-drugs.delete');
	// Route::get('/rate', 'HMO\RateController@index')->name('hmo.rates');

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

	Route::resource('/agreements', 'HMO\AgreementController');
	Route::get('/agreements/delete/{id}', 'HMO\AgreementController@destroy')->name('agreements.delete');
	Route::post('/agreements/update/{id}', 'HMO\AgreementController@update')->name('agreements.update');

});

Route::group(['prefix' => '/hcp', 'middleware' => ['hcp']],  function(){
	Route::resource('/hcp-enrollees', 'HCP\EnrolleeController');
	Route::resource('/hcp-hmos', 'HCP\HmoController');
	Route::resource('/hcp-bills', 'HCP\BillController');
	Route::resource('/hcp-assessments', 'HCP\AssessmentController');
	Route::get('/hcp-tariffs', 'HCP\tariffController@index')->name('hcp.tariffs');
	Route::get('/hcp-rates', 'HCP\RateController@index')->name('hcp.rates');
	Route::get('/drugs', 'HCP\DrugController@index')->name('hcp.drugs');
	Route::resource('/hcp-capitations', 'HCP\CapitationController');
	Route::resource('/hcp-encounters', 'HCP\EncounterController');
	Route::resource('/hcp-claims', 'HCP\ClaimController');
});