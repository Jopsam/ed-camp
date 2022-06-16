<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\StudentController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/tokens/create', function () {
    return ['token' => csrf_token()];
});

//======================== Routes for Price Resource ========================
Route::apiResource('prices', PriceController::class);

//======================== Routes for Company Resource ========================
Route::apiResource('companies', CompanyController::class);

//======================== Routes for Student Resource ========================
Route::apiResource('students', StudentController::class);

//======================== Routes for Payment Resource ========================
Route::apiResource('payments', PaymentController::class);
