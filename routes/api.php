<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ---------------------------

// I didn't implement Middleware beacause it is not defined in Documentation

//Company CRUD
Route::post('/add-company',[ApiController::class,'addCompany']);
Route::post('/updated-company',[ApiController::class,'updateCompany']);
Route::post('/delete-company',[ApiController::class,'deleteCompany']);
//specific company details or all Company fetch
Route::get('/get-companies',[ApiController::class,'getCompanies']);


//User Crud
Route::post('/add-user',[ApiController::class,'addUser']);
Route::post('/update-user',[ApiController::class,'updateUser']);
Route::post('/delete-user',[ApiController::class,'deleteUser']);

//Get Specific User Or All Users
Route::get('/get-user',[ApiController::class,'getUser']);









