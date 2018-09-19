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


Route::get('','LoginController@getLogin')->name('index');
Route::post('login','LoginController@postLogin')->name('login');
Route::get('logout','LoginController@getLogout')->name('logout');
Route::get('home','HomeController@getIndex')->name('home');
Route::get('get-session', function (){
	$sessionId = Session::getId();
	//$sessionId = session()->getId();
	dd($sessionId);
})->name('get-session');
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');