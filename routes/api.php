<?php

use App\Http\Controllers\Api\AuthTokenController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
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
Route::post('/login',[AuthTokenController::class, 'login']);
Route::middleware('auth:sanctum')->group(function(){
    //user
    Route::get('/user' ,[UserController::class, 'getListUser']);
    Route::post('/user' ,[UserController::class, 'insertUser']);
    Route::delete('/user/delete/{id}' ,[UserController::class, 'deleteUser']);
     Route::patch('/user/update/{id}' ,[UserController::class, 'updateUser']);
      //banner
      Route::get('/banner',[BannerController::class, 'getListSemester']);
      Route::post('/banner',[BannerController::class, 'insertSemester']);
      Route::patch('/banner/{id}',[BannerController::class, 'updateSemester']);
      Route::delete('/banner/{id}',[BannerController::class, 'deleteSemester']);
     //course
        Route::get('/category',[CategoryController::class, 'getListCategories']);
      Route::post('/category',[CategoryController::class, 'insertCategory']);
      Route::patch('/category/{id}',[CategoryController::class, 'updateCategory']);
      Route::delete('/category/{id}',[CategoryController::class, 'deleteCategory']);
     //student
     Route::get('/product',[ProductController::class, 'getListProduct']);
      Route::post('/product',[ProductController::class, 'insertProduct']);
      Route::patch('/product/{id}',[ProductController::class, 'updateProduct']);
      Route::delete('/product/{id}',[ProductController::class, 'deleteProduct']);
});
    
   

