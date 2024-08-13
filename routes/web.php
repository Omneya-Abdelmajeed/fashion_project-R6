<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Public\ProductController as PublicProductController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [PublicProductController::class, 'index'])->name('products.index');

Route::group([
    'prefix' => 'products',
    'controller' => AdminProductController::class,
    'as' => 'products.',
], function() {
    Route::get('', 'index')->name('index');
    Route::get('create',  'create')->name('create');
    Route::post('', 'store')->name('store');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::put('{id}', 'update')->name('update');
});