<?php

use App\Http\Controllers\CustomAuthTokenController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterUserContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('register-form');
});

Route::get('/login', function () {
    return view('login-form');
});

Route::get('register', [RegisterUserContoller::class, 'store'])->name('user_register');
Route::post('login', [CustomAuthTokenController::class, 'login'])->name('user_login');

Route::middleware(['custom.auth'])->group(function () {
    Route::get('auth_test', [CustomAuthTokenController::class, 'authTest'])->name('auth_test');
});


Route::group(['prefix' => 'post'], function () {
    // All posts
    Route::get('all_post', [PostController::class, 'index'])->name('all_post');
    // Get one post
    Route::get('one_post/{id}', [PostController::class, 'show'])->name('one_post');
    // Form for creating a post
    Route::get('form_post', [PostController::class, 'create'])->name('form_post');
    // Create post
    Route::post('create_post', [PostController::class, 'store'])->name('create_post');
    // Form for updating a post
    Route::get('form_update_post/{id}', [PostController::class, 'edit'])->name('form_update_post');
    // Update post
    Route::put('update_post/{id}', [PostController::class, 'update'])->name('update_post');
    // Delete post
    Route::delete('delete_post/{id}', [PostController::class, 'destroy'])->name('delete_post');
});

