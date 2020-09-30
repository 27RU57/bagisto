<?php

Route::prefix('custom')->group(function () {
    Route::view('/dashboard', 'admin.dashboard');

    Route::group(['prefix' => 'products'], function () {
        Route::view('/', 'admin.products.index');
        Route::view('/create', 'admin.products.create');
        Route::view('/edit', 'admin.products.edit');
    });

    Route::group(['prefix' => 'recipes'], function () {
        Route::view('/', 'admin.recipes.index');
        Route::view('/create', 'admin.recipes.create');
        Route::view('/edit', 'admin.recipes.edit');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::view('/', 'admin.blog.index');
        Route::view('/create', 'admin.blog.create');
        Route::view('/edit', 'admin.blog.edit');
    });
});