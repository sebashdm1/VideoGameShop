<?php

use Illuminate\Support\Facades\Auth;
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

    Route::get('/blocked','BlockedController@index');
    Auth::routes(['verify' => true]);

    Route::middleware(['auth','isBlocked','verified'])->group(function (){
        Route::get('/home', 'HomeController@index')->name('home');
        Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
            Route::resource('users', 'UsersController');
        });
        Route::resource('products', 'ProductController');
        Route::get('/adminproducts', 'ProductController@adminproducts')->name('adminproducts');
        Route::resource('games', 'GamesController');
        Route::resource('roles', 'RoleController');
    });








