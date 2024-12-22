<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\GoldProductController;

Route::get('/', function () {return view('pages.home');});
Route::get('/contacts', function () {return view('pages.contacts');});
// Маршрут для отображения всех продуктов
Route::get('/catalog', [CatalogController::class, 'showAllProducts']);
// Маршрут для отображения продукта по категориям
Route::get('/catalog/{parentSlug}', [ProductController::class, 'showCategoryProducts']);
// Маршрут для отображения продукта по id
Route::get('/catalog/{parentSlug}/{id}', [ProductController::class, 'showSingleProduct']);
Route::get('/golden', [GoldProductController::class, 'showGoldProducts']);
