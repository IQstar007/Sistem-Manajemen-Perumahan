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


//login...........................................................
Route::get('/', 'LoginController@login');

//Master...........................................................
Route::get('/homemaster', 'MasterController@home');
Route::get('/useradd', 'MasterController@useradd');
Route::get('/userlist', 'MasterController@userlist');
Route::get('/productadd', 'MasterController@productadd');
Route::get('/productlist', 'MasterController@productlist');
Route::get('/financialreport', 'MasterController@financialreport');

//Finance...........................................................
Route::get('/homefinance', 'FinanceController@home');
Route::get('/transactionlist', 'FinanceController@transactionlist');
Route::get('/transactionstage', 'FinanceController@transactionstage');

//Marketing...........................................................
Route::get('/homemarketing', 'MarketingController@home');
Route::get('/productlist_m', 'MarketingController@productlist_m');
Route::get('/commission', 'MarketingController@commission');
