<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('units.index');
});

Route::prefix('units')->name('units.')->group(function () {
    Route::get('/', [UnitController::class, 'index'])->name('index');
    Route::get('/create', [UnitController::class, 'create'])->name('create');
    });