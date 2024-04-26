<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\voitureController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/voitures', [voitureController::class, 'index'])->name('liste-voiture');
Route::get('voitures/{marque}-{modele}-{annee}-{id}.html', [VoitureController::class, 'getById']);

// http://localhost:8000/voitures/toyota-corolla-2019-1
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{article}', [ArticleController::class, 'show']);
Route::post('/articles', [ArticleController::class, 'store']);
Route::put('/articles/{article}', [ArticleController::class, 'update']);
Route::delete('/articles/{article}', [ArticleController::class, 'destroy']);
