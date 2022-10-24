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
    return view("components.home");
});

Route::get("/create-edit", function(){
    return view('components.create-edit-article');
});

Route::get('/article', function(){
    return view('components.article');
});

Route::get('/profile', function(){
    return view('components.profile-page');
});


Route::get('/search', function(){
    return view('components.search');
});
