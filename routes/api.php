<?php

use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\ReservationController;
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

Route::middleware('auth:sanctum')->group(function () {

});

Route::apiResource('/reservation', ReservationController::class);

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/salads', [MenuController::class, 'salads']);
Route::get('/menu/firtsdishes', [MenuController::class, 'firtsdishes']);
Route::get('/menu/maindishes', [MenuController::class, 'maindishes']);
Route::get('/menu/samsa', [MenuController::class, 'samsa']);
Route::get('/menu/grill', [MenuController::class, 'grill']);
Route::get('/menu/kebab', [MenuController::class, 'kebab']);
Route::get('/menu/drinks', [MenuController::class, 'drinks']);

