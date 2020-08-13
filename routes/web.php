<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
})->middleware(['auth.shopify'])->name('home');
