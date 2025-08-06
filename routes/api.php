<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::post('/send-report', [ReportController::class, 'index']);

Route::middleware('api')->group(function () {
    Route::post('/send-report', [ReportController::class, 'sendTelegram']);
});
