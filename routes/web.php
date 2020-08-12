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

//------------------Man Hinh chinh
Route::get('/','HomeController@getHome');
Route::post('/','HomeController@postHome');
//------------------Man Hinh Chi Tiet
Route::get('detail/{id}','DetailController@getDetail');
Route::post('detail/{id','DetailController@postDetail');

//------------------Bieu do 
Route::get('chart/{id}','ChartController@getChart');
Route::get('barchart/{id}','ChartController@getBarChart');