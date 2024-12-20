<?php

use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/contacts', function () {
    return view('pages.contacts');
});

Route::get('/catalog', function () {
    return view('pages.catalog');
});

Route::get('/categories', [Controller::class, 'index']);

Route::get('/catalog/{parentSlug}', [ProductController::class, 'showCategoryProducts']);
