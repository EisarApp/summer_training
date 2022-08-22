<?php

use App\Http\Controllers\Api\V1\CompanyController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function () {
    Route::apiResource('company', CompanyController::class);
    Route::apiResource('trainee', CompanyController::class);
    Route::apiResource('academic', CompanyController::class);
    Route::apiResource('employee', CompanyController::class);
    Route::apiResource('plan', CompanyController::class);
});
