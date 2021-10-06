<?php

use App\Http\Controllers\AutoresController;
use App\Http\Controllers\LibrosController;
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

Route::get('libros',[LibrosController::class,'getAll']); 
Route::get('libro/{id}', [LibrosController::class,'getOne']); 
Route::get('autores', [AutoresController::class,'getAll']);
Route::get('actor/{id}', [AutoresController::class,'getOne']); 
Route::post('nuevoLibro', [LibrosController::class,'create']); 
Route::post('nuevoAutor', [AutoresController::class,'create']); 
Route::post('libroActualizar/{id}', [LibrosController::class,'edit']); 
Route::post('autorActualizar/{id}', [AutoresController::class,'edit']); 
Route::post('libroEliminar/{id}', [LibrosController::class,'destroy']); 
Route::post('autorEliminar/{id}', [AutoresController::class,'destroy']); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
