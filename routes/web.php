<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextToSpeechController;

Route::get('/', [TextToSpeechController::class, 'index']);
Route::post('/speak', [TextToSpeechController::class, 'speak'])->name('speak');
