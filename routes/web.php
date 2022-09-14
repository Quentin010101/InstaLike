<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\ImageUploadController;

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
    return view('home');
});


Route::middleware(['auth','verified'])->group( function(){
    Route::get('/dashbord', [DashbordController::class, 'show_feed']);
    Route::get('/dashbord/show', [DashbordController::class, 'show']);
    Route::get('/dashbord/feed', [DashbordController::class, 'show_feed']);
    Route::get('/dashbord/profile', [DashbordController::class, 'show_profile']);
    Route::get('/dashbord/settings', [DashbordController::class, 'show_settings']);
    Route::get('/dashbord/invitation', [DashbordController::class, 'show_invitation']);

    Route::post('/theme', [ThemeController::class, 'update']);

    Route::get('/image', [ImageController::class, 'show']);

    Route::get('/follower/unfollow/{id}', [FollowerController::class, 'unfollow']);
});

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/tag/{id}', [TagController::class, 'show']);
