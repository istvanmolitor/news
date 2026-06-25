<?php

use Illuminate\Support\Facades\Route;
use Molitor\News\Http\Controllers\AuthorController;
use Molitor\News\Http\Controllers\NewsController;
use Molitor\News\Http\Controllers\SearchController;

Route::middleware(['web'])->group(function () {
    //Route::get('/', [NewsController::class, 'homepage'])->name('news.homepage');
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/authors', [AuthorController::class, 'index'])->name('news.authors');
    Route::get('/authors/{slug}', [AuthorController::class, 'show'])->name('news.author.show');
    Route::get('/search', SearchController::class)->name('news.search');
});
