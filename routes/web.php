<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-to-do', function () {
    return view('add-to-do');
});
Route::get('/edit', function(){
    return view('edit-to-do');
});


// Route::get('/view-all', function () {
//     return view('view-all');
// });


// API ROUTES

Route::get('/view-all', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
Route::delete('/todo/{id}', [TodoController::class, 'delete']);
Route::get('/edit-to-do/{id}', [TodoController::class, 'edit']);
Route::put('/todo/{id}', [TodoController::class, 'update']);