<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index']);
Route::get('/show', [IndexController::class, 'show']);
Route::resource('listing', ListingController::class)->only(['index', 'show']);//if we specify that which routes of function need then only that routes are call or render and rest of all route are not render
