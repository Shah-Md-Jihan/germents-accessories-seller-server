<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// public routes 
Route::get('/student', [StudentController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'allCategories']);
Route::post('/add/category', [CategoryController::class, 'addCategory']);
