<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();    
});

Route::get('/company/{id}', [CompanyController::class, 'show']);

Route::get('/{id}', [CompanyController::class, 'getEmployeesFromCompany']);

Route::post('/company/{id}', [CompanyController::class, 'update']);

Route::get('/company/delete/{id}', [CompanyController::class, 'destroy']);

Route::get('/employee/{id}', [EmployeeController::class, 'show']);

Route::post('/employee/{id}', [EmployeeController::class, 'update']);

Route::get('/employee/delete/{id}', [EmployeeController::class, 'destroy']);
