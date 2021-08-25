<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [UserController::class, 'index']);
Route::get('/rpl', [UserController::class, 'rpl']);
Route::get('/tkj', [UserController::class, 'tkj']);
Route::get('/mm', [UserController::class, 'mm']);
Route::get('/auth/login', [AuthController::class, 'login']);
