<?php

use Illuminate\Support\Facades\Route;
use Webpacks\Blog\Http\Controllers\BlogController;

Route::group(['prefix' => 'blog'], function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::get('/{slug}', [BlogController::class, 'show']);
});
