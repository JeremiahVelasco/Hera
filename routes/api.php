<?php

use App\Http\Controllers\ChildController;
use App\Http\Controllers\RecordAppointmentController;
use App\Http\Controllers\RecordVaccineController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('child', ChildController::class);
Route::apiResource('child/vaccination', RecordVaccineController::class);
Route::apiResource('child/appointment', RecordAppointmentController::class);
