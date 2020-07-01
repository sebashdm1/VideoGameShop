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

        // PRODUCTS ROUTES

        Route::get('products/store','ProductController@store')->name('products.store')
            ->middleware('can:products.create');

        Route::get('products','ProductController@index')->name('products.index')
            ->middleware('can:products.index');

        Route::get('product/create','ProductController@create')->name('products.create')
            ->middleware('can:products.create');

        Route::get('products/{product}','ProductController@update')->name('products.update')
            ->middleware('can:products.edit');

        Route::get('products/{product}','ProductController@show')->name('products.show')
            ->middleware('can:products.show');

        Route::get('products/{product}','ProductController@destroy')->name('products.destroy')
            ->middleware('can:products.destroy');

        Route::get('products/{product}/edit','ProductController@edit')->name('products.edit')
            ->middleware('can:products.edit');

        //Games Routes

        Route::get('games/store','GamesController@store')->name('games.store')
            ->middleware('can:games.create');

        Route::get('games','GamesController@index')->name('games.index')
            ->middleware('can:games.index');

        Route::get('games/create','GamesController@create')->name('games.create')
            ->middleware('can:games.create');

        Route::get('games/{game}','GamesController@update')->name('games.update')
            ->middleware('can:games.edit');

        Route::get('games/{game}','GamesController@show')->name('games.show')
            ->middleware('can:games.show');

        Route::get('games/{game}','GamesController@destroy')->name('games.destroy')
            ->middleware('can:games.destroy');

        Route::get('games/{game}/edit','GamesController@edit')->name('games.edit')
            ->middleware('can:games.edit');

        // Users Routes

        Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){

            Route::get('users','UsersController@index')->name('users.index')
                ->middleware('can:users.index');

            Route::get('users/{game}','UsersController@update')->name('users.update')
                ->middleware('can:users.edit');

            Route::get('users/{user}','UsersController@show')->name('users.show')
                ->middleware('can:users.show');

            Route::get('users/{user}','UsersController@destroy')->name('users.destroy')
                ->middleware('can:users.destroy');

            Route::get('users/{user}/edit','UsersController@edit')->name('users.edit')
                ->middleware('can:users.edit');

        });





        Route::resource('roles', 'RoleController');


    });








