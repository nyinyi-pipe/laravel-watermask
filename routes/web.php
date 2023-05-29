<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WaterMaskController;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/watermask', [WaterMaskController::class, 'applyWaterMask']);
