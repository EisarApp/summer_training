<?php

use App\Models\City;
use App\Models\Plan;
use App\Models\UserCompany;
use App\Models\UserEmployee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TrainingRequestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::get('dashboard', function () {
    return view('dashboard');
});

// Route::get('/sign-in', function () {
//     return view('sign-in');
// });
// Route::get('/home', function () {
//     return view('home');
// }); 


Route::get('/', [PublicController::class, 'index']);
Route::get('companies/{company:id}', [PublicController::class, 'show']);
Route::get('/plans/{plan:id}', [TrainingRequestController::class, 'create']);

//instead of admin .. what? user type?
Route::get('admin/{company:id}/plans', [PlanController::class, 'index']);
Route::get('/{plan:id}/edit', [PlanController::class, 'edit']);
Route::patch('/{plan:id}', [PlanController::class, 'update']);
Route::get('admin/{company:id}/plans/create', [PlanController::class, 'create']);
Route::post('admin/{company:id}/plans', [PlanController::class, 'store']);
Route::delete('/{plan:id}', [PlanController::class, 'delete']);

 Route::get('/trainingRequest', function () {
     return view('trainingRequest.show');
 }); 