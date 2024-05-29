<?php

use App\Http\Controllers\BackEnd\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEnd\UserController; 
use App\Http\Controllers\BackEnd\DashBoardController; 
use App\Http\Middleware\AuthenticateMiddleWare;
use App\Http\Middleware\LoginMiddleWare;

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

Route::get('admin', [AuthController::class, 'index'])->name('auth.admin');

Route::post('login', [AuthController::class, 'login'])->name('auth.login')
->middleware(LoginMiddleWare::class);

Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('dashboard/index',[DashBoardController::class, 'index'])->name('dashboard.index')
->middleware(AuthenticateMiddleWare::class);




