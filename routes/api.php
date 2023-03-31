<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\RegisterController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::name('api.v1.')->prefix('v1')->group(function () {
    Route::post('login', [LoginController::class, 'store'])->name('login');
    Route::post('register', [RegisterController::class, 'store'])->name('register');

    Route::middleware('auth:api')->group(function () {
        Route::get('user', [ProfileController::class, 'index'])->name('user.index');
        Route::patch('user', [ProfileController::class, 'update'])->name('user.update');

    });
});
