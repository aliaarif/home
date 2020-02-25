<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
// 	return $request->user();
// });

// Catch any routes except 'api'
// Route::any('{all}', function(){
// 	return 'false';
// })->where('all','^((?!api).)*?');



Route::post('login', 'Api\UserController@login')->name('login');
Route::group(['middleware' => ['auth:api'], 'namespace' => 'Api'], function(){
	Route::resource('roles', 'RoleController');
	Route::get('verify/{role}', 'UserController@verify');
	Route::post('roles/delete', 'RoleController@deleteAll');
	Route::get('my-settings', 'SettingController@getAllSettings');
	Route::get('save-my-settings/{settingType}/{settingValue}', 'SettingController@saveAllSettings');


	/* Start For autocomplete part */
	//Route::get('countries', 'ManageLocationController@getCountries');
	Route::get('states', 'ManageLocationController@getStates');
	Route::get('cities/{state_name?}', 'ManageLocationController@getCities');
	//Route::get('cities/{city_name?}', 'ManageLocationController@getCities');
	/* End For autocomplete part */

	
	Route::get('list-cities', 'ManageLocationController@listCities');

	





	Route::post('add-new-city', 'ManageLocationController@store');

});


Route::get('load-localities/{cities?}', 'Api\ManageLocationController@loadLocalities');
// Route::get('load-localities-filters', 'Api\ManageLocationController@loadLocalitiesFilters');
Route::get('load-candidates/{cities}', 'Api\ManageLocationController@loadCandidates');
Route::get('filtered-candidates/{filters}', 'Api\ManageLocationController@filteredCandidates');
