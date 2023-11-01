<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminAuthController;
use app\Models\Category;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




Route::middleware(['auth:admin'])->group(function(){
    Route::apiResource('/category', CategoryController::class);
});

Route::apiResource('/user', UserController::class);
Route::post('/login',[AdminAuthController::class,'login']);