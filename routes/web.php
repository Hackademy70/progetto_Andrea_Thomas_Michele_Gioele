<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PublicController::class, 'home'] )->name ('homepage');

Route::get('/chisiamo', [PublicController::class, 'chisiamo'] )->name ('aboutus');

Route::get('/videogames', [PublicController::class, 'videogames'] )->name ('Videogames');

Route::get('/feedback', [PublicController::class, 'feedback'] )->name ('Feedback');


