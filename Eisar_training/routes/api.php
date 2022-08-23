<?php

use App\Http\Controllers\Api\V1\AcademicController;
use App\Http\Controllers\Api\V1\CompanyController;
use App\Http\Controllers\Api\V1\PlanController;
use App\Http\Controllers\Api\V1\TraineeController;
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

Route::post('/trainee', [TraineeController::class, 'store']);
Route::post('/academic', [AcademicController::class, 'store']);

Route::apiResource('academic', AcademicController::class);
Route::apiResource('trainee/{major?}', TraineeController::class);
Route::apiResource('plan/{id?}', PlanController::class);
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\Api\V1', 'middleware' => 'auth:sanctum'], function () {
    Route::apiResource('company', CompanyController::class);
});
