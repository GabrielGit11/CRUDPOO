<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkOrderController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StockController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('work-orders', WorkOrderController::class);
Route::resource('stocks', StockController::class);