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

    $laravel = app();
    $version = $laravel::VERSION;
    $name = config('app.name');
    
    return view('welcome', [
        "version" => $version,
        "name"    => $name
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
