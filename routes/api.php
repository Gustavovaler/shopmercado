<?php

use App\Http\Controllers\BackUrlsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => '/back_urls'], function(){
    Route::post('/success' , [BackUrlsController::class , 'success']);
    Route::post('/pending' , [BackUrlsController::class , 'pending']);
    Route::post('/failure' , [BackUrlsController::class , 'failure']);
});

Route::post('/webhooks' , [BackUrlsController::class , 'webhooks']);
Route::post('/notifications', [BackUrlsController::class , 'webhooks']);
