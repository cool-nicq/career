<?php

use App\Http\Controllers\JobPortalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobPortalController::class, 'index'])->name('job.index');
Route::get('/apply/{id}', [JobPortalController::class, 'apply'])->name('job.apply');
Route::post('/apply/{id}', [JobPortalController::class, 'storeApplication'])->name('job.store');
