<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\messageController;

Route::post('/addmessage',[messageController::class,'storeMessage']);
Route::get('/getmessage',[messageController::class,'showMessage']);
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
