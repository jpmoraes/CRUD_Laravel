<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/serie', [SerieController::class, 'index']);

Route::get('/series/criar', [SerieController::class, 'create'])->name('series.create');

Route::post('/serie/salvar',  [SerieController::class, 'store'])->name('series.store');

Route::put('/serie/update/{id}', [SerieController::class, 'update'])->name('series.update');

Route::delete('/serie/delete/{id}', [SerieController::class, 'delete'])->name('series.delete');


