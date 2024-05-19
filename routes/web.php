<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\CategoriaController;

Route::resource('comic', ComicController::class);
Route::resource('categoria', CategoriaController::class);