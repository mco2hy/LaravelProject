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
Route::get('/home', "App\Http\Controllers\HomeController@index")->name('home');

Route::get('/admin', "App\Http\Controllers\AdminController@index")->name('admin');

Route::get('/data', "App\Http\Controllers\DataController@index")->name('data');

Route::resource('departments', "App\Http\Controllers\DepartmentController");
Route::post('departments', "App\Http\Controllers\DepartmentController@store")->name('departments');

Route::get('/', function () {
    return view('welcome');
});
