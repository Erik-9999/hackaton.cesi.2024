<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['guest']], function () {
    //   -------------------------------------Auth routes --------------------------------
    Route::post('/login', [UserController::class, 'login'])->name('auth.login');
    Route::post('/register', [UserController::class, 'register'])->name('auth.register');
});



Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/getFavorites', [FavoriteController::class, 'index'])->name('auth.getFavorites');
    Route::post('/storeFavorite', [FavoriteController::class, 'store'])->name('auth.storeFavorite');
    Route::put('/updateFavorite/{favorite}', [FavoriteController::class, 'update'])->name('auth.updateFavorite');
});
