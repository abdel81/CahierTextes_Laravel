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


Route::get('/about', function () {
    return view('about');
});


Route::get('login','App\Http\Controllers\AuthController@index')->name('login');
Route::post('proses_login','App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout','App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware' => ['Crt_login:admin']],function(){
        Route::get('admin','App\Http\Controllers\AdminController@index')->name('admin');
    }); 

    Route::group(['middleware' => ['Crt_login:prof']],function(){
        Route::get('prof','App\Http\Controllers\ProfController@index')->name('prof');
    }); 

    Route::group(['middleware' => ['Crt_login:superviseur']],function(){
        Route::get('super','App\Http\Controllers\SuperController@index')->name('super');
    }); 
});