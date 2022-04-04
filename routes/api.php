<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InsurancePlanController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;

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

//Get insurance plans
Route::get('/insurances', [InsurancePlanController::class, 'getInsurancePlans']);

//Get companies list
Route::get('/companies', [CompanyController::class, 'getCompanies']);

//Get user profile
Route::get('/{userId}/profiles', [UserController::class, 'getProfile']);
