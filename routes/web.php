<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', WelcomeController::class);

Route::get('/', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectController::class, 'show'])->name('projects.show');
