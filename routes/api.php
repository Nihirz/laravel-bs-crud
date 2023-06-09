<?php

use App\Http\Controllers\ApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('api/index',[ApiController::class,'index']);
Route::post('api/store',[ApiController::class,'store']);
Route::post('api/edit/{id}',[ApiController::class,'edit']);
Route::post('api/update',[ApiController::class,'update']);
Route::post('api/destroy/{id}',[ApiController::class,'destroy']);
