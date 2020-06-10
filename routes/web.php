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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/', "PagesController@index") ;
Route::get('/about', "PagesController@about") ;
Route::get('/services', "PagesController@services") ;
Route::get('/tologin', "PagesController@login");
Route::get('/personalpage', "CustommerController@personal");

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except' => ['Show','create','store']]);
});

