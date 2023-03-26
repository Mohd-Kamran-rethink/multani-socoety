<?php

use App\Http\Controllers\Bureau\BureauController;
use App\Http\Controllers\Laqabs\laqabs;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainSiteController;
use App\Http\Controllers\people;
use App\Http\Controllers\People\PeopleController as PeoplePeople;
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
/////////////////////////////////////ADMIN PANNEL/////////////////////

//////LAQABS
Route::get('admin/laqabs',[laqabs::class,'list'])->name('list');
Route::get('admin/laqab/add',[laqabs::class,'addForm'])->name('addForm');
Route::post('admin/laqab/add',[laqabs::class,'add'])->name('add');
Route::get('/getCity',[PeoplePeople::class,'getList'])->name('getList');
// /////////PEOPLE
Route::get('admin/peoples',[PeoplePeople::class,'Peoplelist'])->name('list');
Route::get('admin/people/add',[PeoplePeople::class,'addForm'])->name('addForm');
Route::post('admin/people/add',[PeoplePeople::class,'add'])->name('add');
Route::get('admin/import/people', [PeoplePeople::class, 'importPage'])->name('importPage');
Route::post('admin/people/import', [PeoplePeople::class, 'import'])->name('import');




// main site work starts

Route::get('/app/login', [MainSiteController::class, 'login'])->name('login');
Route::post('/app/login', [LoginController::class, 'login'])->name('login');
Route::get('/app/register', [MainSiteController::class, 'register'])->name('register');

Route::get('/app/dashboard', [MainSiteController::class, 'dashboard'])->name('dashboard')->middleware('userCheck');




//                                          BUREAU ROUTES
Route::get('/app/bureau/add-request', [BureauController::class, 'add'])->name('add')->middleware('userCheck');
Route::post('/app/bureau/add-request', [BureauController::class, 'upload'])->name('upload')->middleware('userCheck');
Route::post('/app/upload', [BureauController::class, 'uploadImage'])->name('uploadImage')->middleware('userCheck');

                            
