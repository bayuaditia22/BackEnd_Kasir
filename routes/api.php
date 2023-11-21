<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\jenisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StokController;
use app\Models\Category;
use app\Models\jenis;
use app\Models\Meja;
use app\Models\Menu;
use app\Models\Stok;
use app\Models\Pelanggan;
use app\Models\Pemesanan;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;




//Route::middleware(['auth:admin'])->group(function(){
    Route::apiResource('/category', CategoryController::class);
    Route::apiResource('/jenis', jenisController::class); 
    Route::apiResource('/pelanggan', PelangganController::class);
    Route::apiResource('/meja', MejaController::class);
    Route::apiResource('/stok', StokController::class);
    Route::apiResource('/menu', MenuController::class);
    Route::apiResource('/pemesanan', PemesananController::class);
//});

//Route::apiResource('/user', UserController::class);
//Route::post('/login',[AdminAuthController::class,'login']);