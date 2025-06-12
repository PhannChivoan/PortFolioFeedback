<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('Auth.login');
})->name('login');
Route::get('/register', function () {
    return view('Auth.register');
});

Route::post('/login_now',[AuthController::class,'login']);
Route::post('/logout',[AuthController::class,'destroy']);


Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        return view('Admin.home');
    });
    Route::get('/user',[UserController::class,'showUser']);
    Route::post('/user/adduser',[UserController::class,'store']);
    Route::post('/update_user', [UserController::class, 'updateUser']);
    Route::post('/delete_user', [UserController::class, 'deleteUser']);

    
    Route::post('/addmessage',[messageController::class,'store']);
    Route::get('/getmessage',[messageController::class,'showMessage']);
    Route::post('/update_msg',[messageController::class,'updateMessage']);
    Route::post('/delete_msg',[messageController::class,'deleteMessage']);



    Route::post('/register_now',[AuthController::class,'register']);
    
});