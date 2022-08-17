<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KonsultasiController;

/*
* Disini tempat routing api berada
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(KonsultasiController::class)->group(function () {
    Route::get('/v1/konsultasi/', 'getData');
    Route::post('/v1/konsultasi/{id}', 'updateData');
});