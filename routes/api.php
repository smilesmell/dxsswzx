<?php

use App\Http\Controllers\DxsswzxController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('second',[DxsswzxController::class, 'second']);
Route::post('third',[DxsswzxController::class, 'third']);
Route::post('click',[DxsswzxController::class, 'click']);
