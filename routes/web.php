<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('acceuil', function () {
    return view('layout/index');
});
Route::get('marche', function () {
    return view('layout/marche');
});
Route::get('contact', function () {
    return view('layout/contact');
});