<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ElectionController;
use Illuminate\Support\Facades\Route;

Route::post('/login/central', [AuthController::class, 'central']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('/elections', ElectionController::class);
});
