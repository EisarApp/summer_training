<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PlanController;
use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\Api\V1\CompanyController;
use App\Http\Controllers\Api\V1\TraineeController;
use App\Http\Controllers\Api\V1\AcademicController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/academic', [AcademicController::class, 'store']);
Route::post('/company', [CompanyController::class, 'store']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/trainee', [TraineeController::class, 'store']);

Route::middleware('auth:sanctum')->post('/logout', [LoginController::class, 'logout']);

Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/{company:id}', [CompanyController::class, 'show']);
Route::get('/company/{company:id}/plans', [PlanController::class, 'index']);
Route::get('/company/{company:id}/plans/{plan:id}', [PlanController::class, 'show']);

Route::middleware('auth:sanctum', 'abilities:academic')->get('/academic', [AcademicController::class, 'index']);
Route::middleware('auth:sanctum', 'abilities:academic')->get('/academic/{academic:id}', [AcademicController::class, 'show']);

Route::middleware('auth:sanctum', 'abilities:trainee, academic')->get('/trainee', [TraineeController::class, 'index']);
Route::middleware('auth:sanctum', 'abilities:trainee, academic')->get('/trainee/{trainee:id}', [TraineeController::class, 'show']);

// Route::apiResource('trainee/{major?}', TraineeController::class);
// Route::apiResource('plan/{id?}', PlanController::class);