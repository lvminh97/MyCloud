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

Route::get('/', function() {
    if(Auth::check())
        return redirect()->route("root_folder");
    else
        return redirect()->route("get_login");
})->name("home");

// AUTH
Route::get('login', ["as" => "get_login", "uses" => "Auth\LoginController@getLogin"]);
Route::post('login', ["as" => "post_login", "uses" => "Auth\LoginController@postLogin"]);
Route::get('signup', function () {
    return view('auth.signup');
});

// HOME
Route::get('/root', ["as" => "root_folder", "uses" => "FolderController@getRootFolder"]);
Route::get('/{id}', ["as" => "folder", "uses" => "FolderController@getFolder"]);