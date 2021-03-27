<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FactoryController;

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

Route::get('/', [FactoryController::class, 'welcome']);
Route::get('/login', [FactoryController::class, 'login']);
Route::get('/registers', [FactoryController::class, 'registers']);
Route::post('/register', [FactoryController::class, 'create']);
Route::get('/contact', [FactoryController::class, 'contact']);


