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
    return view('welcome');
});

Route::resource('Seller', 'SellerController' );  
Route::get('/Home', 'HomeController@index');
Route::get('/Home/Dashboard', 'HomeController@companydetails');
Route::get('/Home/Profile', 'HomeController@profile');
Route::get('/Home/BankDetails', 'HomeController@bank');
