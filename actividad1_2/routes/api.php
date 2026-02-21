<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/check-service', [App\Http\Controllers\SsrfController::class, 'checkService']);
Route::post('/check-service-safe', [App\Http\Controllers\SsrfController::class, 'checkServiceSafe']);

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/
