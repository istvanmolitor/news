<?php

use Illuminate\Support\Facades\Route;
use Molitor\News\Http\Controllers\NewsController;

Route::get('/', [NewsController::class, 'homepage'])->name('news.homepage');
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/show', [NewsController::class, 'show'])->name('news.show');
