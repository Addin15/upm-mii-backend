<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InsurancePlanController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FAQsController;
use App\Http\Controllers\SKController;
use App\Http\Controllers\UsersPlanController;

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

//Login
Route::post('/login',[AuthController::class, 'index']);

//Login
Route::post('/register',[AuthController::class, 'register']);

//Get insurance plans
Route::get('/insurances', [InsurancePlanController::class, 'getInsurancePlans']);

//Get companies list
Route::get('/companies', [CompanyController::class, 'getCompanies']);



//Get company insurance plans
Route::get('/company/{companyID}/insurances', [InsurancePlanController::class, 'getCompanyInsurances']);

//Get company insurance plans
Route::get('/company/{companyID}/faqs', [FAQsController::class, 'getCompanyFaqs']);

//Get user profile
Route::get('/profile/{userId}/profile', [UserController::class, 'getProfile']);
Route::post('/profile/{userId}/create', [UserController::class, 'create']);
Route::post('/profile/{userId}/update', [UserController::class, 'update']);

//Get user profile
Route::get('/{userId}/profile', [UserController::class, 'getProfile']);

//Get news
Route::get('/sks', [SKController::class, 'getSK']);

//Get faqs
Route::get('/faqs', [FAQsController::class, 'getFAQs']);

//Get userplan
Route::get('/userplan/{userId}/get', [UsersPlanController::class, 'get']);
Route::get('/userplan/{userId}/{planId}/create', [UsersPlanController::class, 'create']);


