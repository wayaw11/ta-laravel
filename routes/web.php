<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Middleware\Admin;

Route::controller(HomeController::class)->middleware('auth')->group(function () {
  Route::get('/', 'index');
  Route::get('/about', 'about');
});
Route::controller(AuthController::class)->group(function () {
  Route::get('/login', 'index')->middleware('guest')->name('login');
  Route::post('/login', 'login');
  Route::get('/logout', 'logout');
});

Route::get('/manage', [DashboardController::class, 'index'])->middleware('admin');
Route::resource('/products', ProductsController::class)->middleware('admin');
Route::resource('/categories', CategoriesController::class)->middleware('admin');
Route::post('/check', [ProductsController::class, 'check']);
Route::post('/checkfile', [ProductsController::class, 'checkfile']);
