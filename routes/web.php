<?php

use Illuminate\Support\Facades\Route;

// Controller
use App\Http\Controllers\PageController;
use App\Http\Controllers\Guest\TrainController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::get('/trains', [TrainController::class, 'index'])->name('trains.index_trains');

