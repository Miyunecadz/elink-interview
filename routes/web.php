<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\MovieController;
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

Route::get('/', [MovieController::class, 'index'])->name('index');

Route::get('/cart', [ItemController::class, 'index'])->name('cart');
Route::post('/cart', [ItemController::class, 'add'])->name('add');
Route::delete('/cart/{item}', [ItemController::class, 'remove'])->name('delete');
