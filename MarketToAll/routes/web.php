<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'mainController@index')->name('home');
Route::get('/categories','mainController@categories')->name('categories');
Route::get('/users/login','mainController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::get('/change-passweord', 'Auth\ChangePasswordController@changepassword')->name('password.update');
Route::group(['as'=>'admin.','perfix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],
function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});
Route::group(['as'=>'client.','perfix'=>'client','namespace'=>'Client','middleware'=>['auth','client']],
function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
});