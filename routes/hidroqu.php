<?php

use App\Http\Controllers\Comment\StoreCommentController;
use App\Http\Controllers\Community\DetailCommunityController;
use App\Http\Controllers\Community\ListCommunityController;
use App\Http\Controllers\Community\StoreCommunityController;
use App\Http\Controllers\Diagnostic\DetailDiagnosticHistoryController;
use App\Http\Controllers\Plant\DetailUserPlantController;
use App\Http\Controllers\Plant\ListPlantController;
use App\Http\Controllers\Plant\ListUserPlantController;
use App\Http\Controllers\Plant\StoreUserPlantController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => 'plants'], function () {
        Route::get('/', ListPlantController::class);
        Route::post('/store', StoreUserPlantController::class);
        Route::get('/my-plants', ListUserPlantController::class);
        Route::get('/my-plants/{user_plant:id}', DetailUserPlantController::class);
        Route::get('/my-plants/{user_plant:id}/diagnostics/{diagnostic_history:id}', DetailDiagnosticHistoryController::class);
    });

    Route::group(['prefix' => 'communities'], function () {
        Route::get('/', ListCommunityController::class);
        Route::get('/{community:id}', DetailCommunityController::class);
        Route::post('/{community:id}/comment', StoreCommentController::class);
        Route::post('/store', StoreCommunityController::class);
        Route::get('/my-posts', ListCommunityController::class);
    });
});
