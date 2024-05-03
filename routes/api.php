<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

//     return $request->user()->load(['roles']);
// });


Route::post('/login', 'App\Http\Controllers\AuthController@login');

Route::get(
    uri: '/user',
    action: [UserController::class, 'index'],
);

Route::middleware('auth:sanctum')->group(function () {
    Route::post(
        uri: '/logout',
        action: [AuthController::class, 'logout'],
    );


    Route::post(
        uri: 'create',
        action: [UserController::class, 'store']
    );
});
