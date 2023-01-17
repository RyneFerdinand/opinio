<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\UserController;
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

Route::controller(Controller::class)->group(function (){
    Route::get('/', 'home');
    Route::get('/people/{query}', 'viewMorePeople');
    Route::get('/articles/{query}', 'viewMoreArticles');
    Route::get('/search', 'search');
    Route::get('/article/{id}', 'article');
});

Route::get('/category/{category}', [CategoryController::class, 'show']);

Route::middleware(['userSecurity'])->group(function () {
    Route::controller(UserController::class)->group(function (){
        Route::patch('/user/{user}/update/authentication', 'updateAuthentication');
        Route::patch('/user/{user}/update/personal', 'updatePersonal');
        Route::patch('/user/{user}/update/cover', 'updateCover');
        Route::patch('/user/{user}/update/profile', 'updateProfile');

        Route::get('/logout', 'logout');
        Route::get('/user/update', 'edit');
        Route::get('/user/edit', 'edit');
    });

    Route::controller(ArticleController::class)->group(function (){
        Route::patch('/article/{article}/update/picture', 'updatePicture');
        Route::patch('/article/{article}/update/data', 'updateArticle');

        Route::get('/edit-article/{article}', 'edit');
        Route::get('/create-article', 'create');

        Route::post('/create-article', 'store');

        Route::delete('/article/{article}', 'delete');
    });

    Route::post('/comment/{id}', [CommentController::class, 'store']);

    Route::delete('/comment/{comment}', [CommentController::class, 'delete']);

    Route::post('/like/{id}', [LikeController::class, 'toggleLike']);
});

Route::get('/user/{id}', [UserController::class, 'profile']);

Route::middleware(['guestSecurity'])->group(function(){
    Route::controller(UserController::class)->group(function (){
        Route::post('/login', 'login');
        Route::post('/register', 'register');
        Route::get('/login', 'showLogin');
        Route::get('/register', 'showRegister');
    });
});
