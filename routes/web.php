<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\staffsController;

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

Route::get('/', [staffsController::class, 'view']);

Route::get('/ja_solutions', [staffsController::class, 'view']);
Route::get('/ja_solutions/delete/{id}', [staffsController::class, 'delete']);
Route::view('ja_solutions/add', 'ja_solutions.add');
Route::post('/ja_solutions/add', [staffsController::class, 'add']);
Route::get('/ja_solutions/edit/{id}', [staffsController::class, 'update']);
Route::post('/ja_solutions/edit', [staffsController::class, 'change']);
