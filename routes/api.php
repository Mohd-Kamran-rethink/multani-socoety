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

Route::post('/login',);
Route::post('/login', [User::class,'login'])->name('login');
// Route::get('/app/bureau/profile/status', [BureauController::class, 'profileStatus'])->name('profileStatus')->middleware('userCheck');
