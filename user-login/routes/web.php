<?php

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

    
Route::get('/', function () {
    return view('welcome');
});

Route::post('/logininsert', [App\Http\Controllers\LoginController::class, 'viewInsert']);
Route::get('/register', [App\Http\Controllers\LoginController::class, 'viewRegister']);
Route::post('/registerInsert', [App\Http\Controllers\LoginController::class, 'valueRegister']);
Route::get('/RegisterForm', [App\Http\Controllers\LoginController::class, 'RegisterFormView']);
Route::post('/update-User/{id}', [App\Http\Controllers\LoginController::class,'updateUser']);
