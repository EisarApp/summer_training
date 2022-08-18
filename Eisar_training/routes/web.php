<?php

use App\Models\Plan;
use App\Models\UserEmployee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;

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

// Route::get('/', function () {
//     return view('supervisor-student');
// });
// Route::get('/', function () {
//     return view('student-dashboard');
// });
Route::get('/', function () {


    return view('plan', ['plans' => Plan::all()]);
});

Route::get('plan/create', function () {

    return view('add-plan-form', ['employees' => UserEmployee::all()]);

    return view('university-dashboard');

});
Route::post('plan', [PlanController::class, 'store']);
Route::get('plan/{plan}', [PlanController::class, 'destroy']);
