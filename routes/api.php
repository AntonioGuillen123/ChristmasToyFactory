<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;

Route::get('/elf', [ToyController::class,'index'])->name('apiindex');