<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;

Route::get('/', function () {return view('pages.home');});
Route::get('/contacts', function () {return view('pages.contacts');});


Route::get('/catalog/{parentSlug}', [ProductController::class, 'showCategoryProducts']);


// Маршрут для отображения всех продуктов
Route::get('/catalog', [CatalogController::class, 'showAllProducts'])->name('catalog.all');
