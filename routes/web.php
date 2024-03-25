<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/display', [StudentController::class, 'index']);
Route::delete('/delete/{id}', [StudentController::class, 'destroy']);
Route::get('/create', [StudentController::class, 'create']);
Route::post('/create', [StudentController::class, 'store']);
Route::get('/edit/{id}', [StudentController::class, 'edit']);
Route::put('/edit/{id}', [StudentController::class, 'update']);