<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
// 	return view('app');
// });

Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

//Catch any routes except 'api'
// Route::any('{all}', function($path = null){

// 	// if($path != null){
// 	// 	$data = [
// 	// 		'path' => $path
// 	// 	];	
// 	// }else{
// 	// 	$data = [
// 	// 		'path' => 'app'
// 	// 	];	
// 	// }

// 	//dd($path);

// 	return view('app', $data);
// })->where('all','^((?!api&&!administrator&&!translator!login!app).)*?');
