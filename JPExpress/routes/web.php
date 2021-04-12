<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::group(['middleware' => ['auth','admin']],function() {
    Route::get('/users','AdminController@users');
    Route::get('/countrys','AdminController@countrys');
    Route::put('/bannedit/{id}','AdminController@userChangeStatus');
    Route::put('/countrycreate','AdminController@countrystore');
    Route::get('/viewcountries','AdminController@viewcountries');
    Route::get('/createtraveller','AdminController@createtraveller');
    Route::put('/travelercreate','AdminController@travelerstore');
    Route::get('/viewtraveller','AdminController@viewtraveller');
    Route::get('/traveleredit/{id}','AdminController@traveleredit');
    Route::put('/travelerupdate/{traveler}','AdminController@travelersave');
    Route::delete('/deletetraveler/{id}','AdminController@travelerdelete');
});

Auth::routes();

Route::group(['middleware' => ['auth','isUser']],function() {

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/profileoverview', 'HomeController@profileoverview')->name('profileoverview');
Route::put('/editinfo/{id}', 'HomeController@editinfo')->name('editinfo');
Route::get('/changepassword', 'HomeController@changepassword')->name('changepassword');
Route::put('/updatepassword', 'HomeController@updatepassword')->name('updatepassword');
Route::get('/quickrates', 'HomeController@quickrates')->name('quickrates');
