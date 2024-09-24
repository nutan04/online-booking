<?php

use App\Http\Controllers\BusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/buses', function () {
//     return "hello world";
// });

Route::get('buses', [BusController::class, 'index']); // Get all buses
Route::post('buses', [BusController::class, 'store']); // Create a new bus
Route::get('buses/{id}', [BusController::class, 'show']); // Get a specific bus
Route::put('buses/{id}', [BusController::class, 'update']); // Update a specific bus
Route::delete('buses/{id}', [BusController::class, 'destroy']); // Delete a specific bus
