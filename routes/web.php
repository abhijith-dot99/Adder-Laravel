<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::get('/', [ProjectController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
