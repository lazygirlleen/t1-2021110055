<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResourceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');


Route::resource('/products', ResourceController::class);
Route::get('/', [HomeController::class, 'index'])->name('home');
