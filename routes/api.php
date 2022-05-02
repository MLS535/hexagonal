<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\GetAllShopController;
use \App\Http\Controllers\CreateShopController;
use \App\Http\Controllers\UpdateShopController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/shops', [GetAllShopController::class, "handleApi"])->name("shop");
Route::post('/shops', [CreateShopController::class, "handleApi"])->name("create");
Route::put('/shops/{id}', [UpdateShopController::class, "handleApi"])->name("update");
