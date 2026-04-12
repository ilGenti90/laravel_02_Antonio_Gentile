<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CardgamesController;


Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/chi-siamo', [CardgamesController::class, 'chiSiamo'])->name('ChiSiamo');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('Servizi');

// Rotta dettaglio Cardgame BLOG
Route::get('/servizi/dettaglio/{title}', [CardgamesController::class, 'dettaglio'])->name('DettaglioCardgame');




