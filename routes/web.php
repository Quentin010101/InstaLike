<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashbordController;
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

Route::get('/dashbord', [DashbordController::class, 'show_feed'])->middleware('auth','verified');
Route::get('/dashbord/show', [DashbordController::class, 'show'])->middleware('auth','verified');
Route::get('/dashbord/feed', [DashbordController::class, 'show_feed'])->middleware('auth','verified');
Route::get('/dashbord/profile', [DashbordController::class, 'show_profile'])->middleware('auth','verified');
Route::get('/dashbord/settings', [DashbordController::class, 'show_settings'])->middleware('auth','verified');

Route::post('/comments/store/{id}', [CommentController::class , 'store']);

Route::post('/upload-image', [ImageUploadController::class, 'store_image']);

Route::get('/avatar', function(){
    return view('avatar');
});
Route::post('/avatar', [ImageUploadController::class, 'store_avatar']);