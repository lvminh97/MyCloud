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

// AUTH
Route::get('login', function () {
    return view('auth.login');
});
Route::post('login', ["uses" => "Auth\LoginController@postLogin"]);
Route::get('signup', function () {
    return view('auth.signup');
});

// HOME
Route::get('/', ["as" => "root_folder", "FolderController@getRootFolder"]);
Route::get('/{id}', ["as" => "folder", "FolderController@getFolder"]);