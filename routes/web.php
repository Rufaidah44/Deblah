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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//Main Pages
Route::get('/', "PagesController@index") ;
Route::get('/about', "PagesController@about") ;
Route::get('/services', "PagesController@services") ;

//Customers Pages
Route::get('/personalpage', "CustomersController@personal");
Route::resource('customersignup', "CustomersController");


// Services Providers Pages//
Route::get('/servprovidersignup', "ServProviderController@signup");
Route::get('/servproviderpage', "ServProviderController@personal"); 
Route::resource('servprovidersegester', "ServProviderController"); 
Route::get('/myservices', "ProvPagesController@myServices") ;
Route::get('/myProfile', "ProvPagesController@myProfile") ;
Route::get('/myNotifications', "ProvPagesController@myNotifications") ;
Route::get('/myMessages', "ProvPagesController@myMessages") ;
Route::get('/myBookedServ', "ProvPagesController@myBookedServ") ;
Route::resource('addnewhall',"HallServiceController");





Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users','UsersController',['except' => ['Show','create','store']]);
});

