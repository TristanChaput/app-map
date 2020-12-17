<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;

Route::get('/', [CompanyController::class, 'index']);

Route::get('/company/{id}', [CompanyController::class, 'show']);

Route::get('/employee/{id}', [EmployeeController::class, 'show']);