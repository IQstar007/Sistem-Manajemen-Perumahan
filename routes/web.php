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
Route::get('/profilemaster', 'MasterController@profilemaster');
Route::get('/useradd', 'MasterController@useradd');
Route::get('/userlist', 'MasterController@userlist');
Route::get('/useredit', 'MasterController@useredit');
Route::get('/productadd', 'MasterController@productadd');
Route::get('/productlist', 'MasterController@productlist');
Route::get('/productedit', 'MasterController@productedit');
Route::get('/categoryadd', 'MasterController@categoryadd');
Route::get('/categorylist', 'MasterController@categorylist');
Route::get('/categoryedit', 'MasterController@categoryedit');
Route::get('/financialreport', 'MasterController@financialreport');

//Finance...........................................................
Route::get('/homefinance', 'FinanceController@home');
Route::get('/transactionlist', 'FinanceController@transactionlist');
Route::get('/transactionadd', 'FinanceController@transactionadd');
Route::get('/transactionstage', 'FinanceController@transactionstage');
Route::get('/transactionedit', 'FinanceController@transactionedit');

//Marketing...........................................................
Route::get('/homemarketing', 'MarketingController@home');
Route::get('/productlist_m', 'MarketingController@productlist_m');
Route::get('/commission', 'MarketingController@commission');
