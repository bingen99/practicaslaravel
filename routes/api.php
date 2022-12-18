<?php

use App\Http\Controllers\alumnadocontroller;
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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/

Route::get('/alumnos', [alumnadocontroller::class, 'alumnos']);
Route::get('/alumnos/{id}', [alumnadocontroller::class, 'alumno'])->middleware('validarid');
Route::delete('/alumnos/{id}', [alumnadocontroller::class, 'borrar'])->middleware('validarid');
Route::post('/alumnos', [alumnadocontroller::class, 'crear']);
Route::put('/alumnos/{id}', [alumnadocontroller::class, 'editar'])->middleware('validarid');
