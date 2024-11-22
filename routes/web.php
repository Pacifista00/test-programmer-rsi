<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TodoController::class, 'index']);
Route::get('/add-form', [TodoController::class, 'addForm']);
Route::get('/update-form/{id}', [TodoController::class, 'updateForm']);

Route::post('/add', [TodoController::class, 'add']);
Route::post('/update/{id}', [TodoController::class, 'update']);
Route::get('/delete/{id}', [TodoController::class, 'delete']);

