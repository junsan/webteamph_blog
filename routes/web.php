<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('welcome');
})->name('index');

Route::get('blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.store');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');

Route::prefix('/admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/blogs', [BlogController::class, 'admin'])->name('admin.blog.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy'])->name('blog.delete');

    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
});