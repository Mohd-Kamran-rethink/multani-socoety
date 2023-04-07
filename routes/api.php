<?php

use App\Http\Controllers\UserApiController\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/otp', [User::class,'otp'])->name('otp');
Route::post('/login', [User::class,'login'])->name('login');
Route::get('/get/register/otp', [User::class,'sendOtp'])->name('sendOtp');
Route::get('/get/register/form/data/common', [User::class,'getDataRegister'])->name('getDataRegister');
Route::get('/get/register/form/data/cities', [User::class,'getCities'])->name('getCities');
Route::post('/user/register', [User::class,'register'])->name('register');
// Route::get('/app/bureau/profile/status', [BureauController::class, 'profileStatus'])->name('profileStatus')->middleware('userCheck');
