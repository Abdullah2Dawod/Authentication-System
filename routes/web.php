<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;


Route::get("/", [TaskController::class, 'index']);

Route::post("/store", [TaskController::class, 'store']);

Route::post("/delete/{id}", [TaskController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 ?>
