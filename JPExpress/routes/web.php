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
    Route::get('/userChangeStatus','AdminController@userChangeStatus')->name('admin.userChangeStatus');
    Route::put('/countrycreate','AdminController@countrystore');
    Route::get('/viewcountries','AdminController@viewcountries');
});

Auth::routes();

Route::group(['middleware' => ['auth','isUser']],function() {

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
