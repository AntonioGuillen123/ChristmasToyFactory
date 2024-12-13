<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToyController;

Route::get('/elf', [ToyController::class,'index'])->name('apiindex');
Route::delete('/elf/{id}',[ToyController::class,'destroy'])->name('apidestroy');
Route::post('/elf',[ToyController::class,'store'])->name('apistore');
Route::put('/elf/{id}',[ToyController::class,'update'])->name('apiupdate');
Route::get('/elf/{id}', [ToyController::class, 'show'])->name('apishow');