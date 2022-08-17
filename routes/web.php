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
// Route::get('/ja_solutions', [staffsController::class, 'view']);

Route::get('/delete/{id}', [staffsController::class, 'delete']);

Route::view('/add', 'ja_solutions/add')->name('add');

Route::post('/add', [staffsController::class, 'add']);

Route::get('/edit/{id}', [staffsController::class, 'update']);

Route::post('/edit', [staffsController::class, 'change']);
