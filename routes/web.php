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

//Route::get('/employee', function() {
//Route::get('employee', 'EmployeesController@test')->middleware('auth');
// 認証済みのユーザーのみが入れる

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');//classから抜き出し、別名を
//Route::get('/employee', 'EmployeesController@index')->name('employee');


