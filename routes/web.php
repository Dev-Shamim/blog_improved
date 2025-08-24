<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

// Auto-generated routes
// Route::resource('category.php', \App\Http\Controllers\Admin\CategoryController::class);
// Route::resource('dashboard.php', \App\Http\Controllers\Admin\DashboardController::class);
// Route::resource('post.php', \App\Http\Controllers\Admin\PostController::class);
// Route::resource('profile.php', \App\Http\Controllers\Admin\ProfileController::class);
// Route::resource('login.php', \App\Http\Controllers\Auth\LoginController::class);
// Route::resource('register.php', \App\Http\Controllers\Auth\RegisterController::class);
// Route::resource('about.php', \App\Http\Controllers\Frontend\AboutController::class);
// Route::resource('category.php', \App\Http\Controllers\Frontend\CategoryController::class);
// Route::resource('contact.php', \App\Http\Controllers\Frontend\ContactController::class);
// Route::resource('home.php', \App\Http\Controllers\Frontend\HomeController::class);
// Route::resource('post.php', \App\Http\Controllers\Frontend\PostController::class);
// Route::resource('profile.php', \App\Http\Controllers\Frontend\ProfileController::class);

 

// Frontend routes
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('category', [App\Http\Controllers\Frontend\CategoryController::class, 'index'])->name('category.index');
Route::get('posts', [App\Http\Controllers\Frontend\PostController::class, 'index'])->name('post.index');
Route::get('posts/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'show'])->name('post.show');
Route::get('profile/username', [App\Http\Controllers\Frontend\ProfileController::class, 'index'])->name('profile.show');
Route::get('about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

// Authentication routes
Route::get('login', [App\Http\Controllers\Auth\LoginController::class,'login'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class,'store']);
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class,'store'])->name('register.store');


// Admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () 
{
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile/me', [App\Http\Controllers\Admin\ProfileController::class, 'me'])->name('profile.me');
    Route::get('profile/edit', [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name('profile.edit');

    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);
});