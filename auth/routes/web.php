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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/docs' , function(){
	return view('layouts.demo');
});

//Route::get('/nav' , 'HomeController@nav');\
Route::get('/nav', function () {
    return view('layouts.nav');
});

/*
Route::get('/test' , function(){
	return 'hey buddy';             //middleware for single route 
})->middleware('userlogin');
*/

Route::group(['middleware' => 'userlogin'],function(){
	Route::get('/test' ,function(){
	return view('login'); 
	}); 	                               //middleware for group of routes 
});


//Route::get('/democheck', function(){
	//return view('demo');
//})->middleware('demoauth');


Route::get('/customers', 'CustomerController@index');  //to display
Route::post('/customers', 'CustomerController@store'); //to store and db 
Route::get('customers/{id}' , 'CustomerController@show'); //to update  via id 
Route::post('/customers-update', 'CustomerController@update');

Route::get('customers-delete/{id}' , 'CustomerController@delete'); //to delete
 
