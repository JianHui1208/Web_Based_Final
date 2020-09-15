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
    return view('welcome');
});

Route::get('/insertDriver',[
    'uses'=>'App\Http\Controllers\driverController@create',
    'as'=>'driver'
]);

Route::post('insertDriver/store',[
    'uses'=>'App\Http\Controllers\driverController@store',
    'as'=>'addDriver.store'
]);

Route::get('/list',[
    'uses'=>'App\Http\Controllers\driverController@showlist',
    'as'=>'all.Driver'
]);

Route::get('/list/delete/{ID}',[
    'uses'=>'App\Http\Controllers\driverController@delete',
    'as'=>'delete.driver'
]);

Route::get('/editInfor/{ID}',[
    'uses'=>'App\Http\Controllers\driverController@edit', 
    'as'=>'edit.driver'
]);

Route::post('updateDriverInfor', [
    'uses'=>'App\Http\Controllers\driverController@update',
    'as' => 'editDriver.update'
]);

Route::get('/driverdetail/{ID}',[
    'uses'=>'App\Http\Controllers\driverController@showDetail',
    'as'=>'driver.detail'
]);

Auth::routes();

Route::get('/home', [
    App\Http\Controllers\HomeController::class, 'index'
    ])
    ->name('home');
