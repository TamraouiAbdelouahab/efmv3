<?php

use App\Http\Controllers\LivreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('index');
});
Route::get('/book/create', [LivreController::class,'create'])->name('livre.create');
Route::post('/book', [LivreController::class,'store'])->name('livre.store');
Route::get('/book', [LivreController::class,'index'])->name('livre.index');
