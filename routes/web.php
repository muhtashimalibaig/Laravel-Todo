<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-to-do', function () {
    return view('add-to-do');
});

Route::get('/view-all', function () {
    return view('view-all');
});
