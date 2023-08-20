<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
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

//Company
Route::get('/',[CompanyController::class,'index'])->name('companies');
Route::post('/add-company',[CompanyController::class,'addCompany'])->name('addCompany');
Route::get('/getCompany',[CompanyController::class,'getCompany'])->name('getCompany');

//Users
Route::get('/users-list',[UserController::class,'usersList'])->name('usersList');
Route::post('/user-regitser',[UserController::class,'registerUser'])->name('registerUser');
Route::get('/all-users',[UserController::class,'allUsers'])->name('allUsers');
Route::get('/delete-users/{id}',[UserController::class,'deleteUser'])->name('deleteUser');
Route::get('/update-user/{id}',[UserController::class,'updateUser'])->name('updateUser');
Route::post('/update-user',[UserController::class,'updateUserData'])->name('updateUserData');



