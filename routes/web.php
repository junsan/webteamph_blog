<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;

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
});

Route::get('blogs', [BlogController::class, 'index']);

Route::prefix('/admin')->group(function() {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/blogs', [BlogController::class, 'admin']);
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
});