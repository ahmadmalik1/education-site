<?php

use App\Http\Controllers\EducaController;
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

Route::get('/',[EducaController::class,'index']);
Route::get('/about',[EducaController::class,'about']);
Route::get('/contact',[EducaController::class,'contact']);
Route::get('/courses',[EducaController::class,'courses']);
