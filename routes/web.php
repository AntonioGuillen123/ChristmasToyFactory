<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;

Route::get('/', function () {return view('home');});

Route::get('/elf', [ToyController::class, 'index'])->name('home');