<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

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
 


Route::middleware('auth:api')->get('/user', function(Request $request) {
    return $request->user();
}); 

Route::get('create', [UserController::class,'store']); 
Route::get('listAll', [UserController::class,'listAll'])->middleware('auth:api');
Route::get('list/{id}', [UserController::class,'list'])->middleware('auth:api');
Route::get('update/{id}', [UserController::class,'update'])->middleware('auth:api');
Route::get('delete/{id}', [UserController::class,'destroyee'])->middleware('auth:api'); 

 