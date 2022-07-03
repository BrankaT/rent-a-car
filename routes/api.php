<?php

use App\Models\Car;

use App\Http\Controllers\CarsController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategoriesController::class, 'index']);
Route::post('/categories', [CategoriesController::class, 'store']);
Route::put('/categories/{category}', [CategoriesController::class, 'update']);
Route::delete('/categories/{category}', [CategoriesController::class, 'destroy']);

Route::get('/cars', [CarsController::class, 'index']);
Route::post('/cars', [CarsController::class, 'store']);
Route::put('/cars/{car}', [CarsController::class, 'update']);
Route::delete('/cars/{car}', [CarsController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
