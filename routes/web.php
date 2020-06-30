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

Route::get('/', function () {

    $user=Auth::user();

    if (Auth::check())
        if ($user->esAdmin())
            echo "Eres usuario administrador.";
        else
            echo "Eres estudiante.";

    return view('welcome');
});



Route::get('/blocked','BlockedController@index');
Auth::routes(['verify' => true]);


Route::group(['middleware' => 'isBlocked'],function(){

    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::resource('games','GamesController')->middleware('verified');
    Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function (){
        Route::resource('/users','UsersController',['except'=>['show','create','store']])->middleware('verified');
    });



});





