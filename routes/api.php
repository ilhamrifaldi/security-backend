<?php

use App\Http\Controllers\API\BunkerWaterController;
use App\Http\Controllers\API\ItemController;
use App\Http\Controllers\API\ItemPhotoController;
use App\Http\Controllers\API\KapalTambatController;
use App\Http\Controllers\API\SuratController;
use App\Http\Controllers\API\SuratFuelPhotoController;
use App\Http\Controllers\API\SuratLpgPhotoController;
use App\Http\Controllers\API\SuratPhotoController;
use App\Http\Controllers\API\TabungLpgController;
use App\Http\Controllers\API\TrukTangkiController;
use App\Http\Controllers\API\UserController;
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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class, 'fetch']);
    Route::post('/user', [UserController::class, 'updateProfile']);
    Route::post('/user', [UserController::class, 'logout']);
});
Route::post('/register', [UserController::class, 'register']);
Route::post('/login',[UserController::class, 'login']);

Route::get('/items', [ItemController::class, 'all']);
Route::post('/itemphoto',[ItemPhotoController::class, 'imageStore']);
Route::get('/kapaltambat', [KapalTambatController::class, 'all']);
Route::get('/bunkerwater', [BunkerWaterController::class, 'all']);
Route::get('/surat', [SuratController::class, 'all']);
Route::get('/tabunglpg', [TabungLpgController::class, 'all']);
Route::get('/truktangki', [TrukTangkiController::class, 'all']);
Route::post('/suratphoto',[SuratPhotoController::class, 'imageStore']);
Route::post('/suratlpgphoto',[SuratLpgPhotoController::class, 'imageStore']);
Route::post('/suratfuelphoto',[SuratFuelPhotoController::class, 'imageStore']);
