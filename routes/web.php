<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LeadController::class, 'index'])->name('home');
Route::post('/evaluacion', [LeadController::class, 'store'])->name('leads.store');
Route::get('/lang/{locale}', [LanguageController::class, 'switch'])
    ->name('lang.switch')
    ->whereIn('locale', ['es', 'en']);