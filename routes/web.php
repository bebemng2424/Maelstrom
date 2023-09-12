<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
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

// Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
// });

// Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/service', [ServiceController::class, 'index'])->name('services.index');
    Route::get('/product', [ProductController::class, 'index'])->name('products.index');
    Route::get('/gallery', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/contact', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/book', [BookController::class, 'index'])->name('books.index');
// });
