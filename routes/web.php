<?php

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
