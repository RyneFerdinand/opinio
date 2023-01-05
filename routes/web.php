<?php

use App\Http\Controllers\ArticleController;
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

Route::get('/', [Controller::class, 'home']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/logout', [UserController::class, 'logout']);

Route::patch('/user/{user}/update/authentication', [UserController::class, 'updateAuthentication']);
Route::patch('/user/{user}/update/personal', [UserController::class, 'updatePersonal']);
Route::patch('/user/{user}/update/cover', [UserController::class, 'updateCover']);
Route::patch('/user/{user}/update/profile', [UserController::class, 'updateProfile']);
Route::get('/user/update', [UserController::class, 'edit']);
Route::get('/user/edit', [UserController::class, 'edit']);
Route::get('/user/{id}', [UserController::class, 'profile']);
Route::get('/people/{query}', [Controller::class, 'viewMorePeople']);
Route::get('/edit-article/{article}', [ArticleController::class, 'edit']);
Route::get('/create-article', [ArticleController::class, 'create']);
Route::get('/articles/{query}', [Controller::class, 'viewMoreArticles']);

Route::get('/search', [Controller::class, 'search']);
Route::get('/article/{id}', [Controller::class, 'article']);
Route::post('/comment/{id}', [CommentController::class, 'store']);
Route::delete('/comment/{comment}', [CommentController::class, 'delete']);

Route::post('/like/{id}', [LikeController::class, 'toggleLike']);

Route::get('/login', [UserController::class, 'showLogin']);
Route::get('/register', [UserController::class, 'showRegister']);
