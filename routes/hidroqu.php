<?php

use App\Http\Controllers\Plant\StoreUserPlantController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => 'plants'], function () {
        Route::post('/store', StoreUserPlantController::class);
    });
});
