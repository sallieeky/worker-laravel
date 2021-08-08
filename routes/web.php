<?php

use App\Http\Controllers\AllController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AllController::class, 'landing']);
Route::get('/login', [AllController::class, 'login']);
Route::post('/login', [AllController::class, 'loginPost']);

Route::get('/logout', [AllController::class, 'logout']);

Route::post('/kirimpesan', [AllController::class, 'kirimPesan']);

Route::post('/tambahporto', [AllController::class, 'tambahPorto']);
Route::get('/hapusporto/{id}', [AllController::class, 'hapusPorto']);
