<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PlaceController::class, 'index']);
Route::get('/create', [PlaceController::class, 'create']);
Route::post('/store', [PlaceController::class, 'store']);
Route::get('/show/{id}', [PlaceController::class, 'show']);
Route::get('/edit/{id}', [PlaceController::class, 'edit']);
Route::post('/update/{id}', [PlaceController::class, 'update']);
Route::post('/destroy/{id}', [PlaceController::class, 'destroy']);
