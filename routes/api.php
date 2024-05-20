<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\GradeLevelController;
use App\Http\Controllers\FacilitatorController;

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

// Route::get(
//     uri: '/user',
//     action: [UserController::class, 'index'],
// );

// Route::post(
//     uri: '/user/store',
//     action: [UserController::class, 'store'],
// );

// Route::put(
//     uri: '/user/update/{id}',
//     action: [UserController::class, 'update'],
// );

// Route::get(
//     uri: '/user/show/{id}',
//     action: [UserController::class, 'show'],
// );

// Route::get(
//     uri: '/user/delete/{id}',
//     action: [UserController::class, 'destroy'],
// );

Route::post('/login', 'App\Http\Controllers\AuthController@login');


Route::middleware('auth:sanctum')->group(function () {
    Route::post(
        uri: '/logout',
        action: [AuthController::class, 'logout'],
    );

    Route::apiResource('users', UserController::class);

    Route::apiResource('grade-levels', GradeLevelController::class);

    Route::apiResource('sections', SectionController::class);

    Route::apiResource('students', StudentController::class);
    Route::get(
        uri: '/students/search/{key}',
        action: [StudentController::class, 'search'],
    );

    Route::apiResource('divisions', DivisionController::class);

    Route::apiResource('teams', TeamController::class);

    Route::apiResource('events', EventController::class);

    Route::apiResource('categories', CategoryController::class);

    Route::apiResource('locations', LocationController::class);

    Route::apiResource('facilitators', FacilitatorController::class);

    Route::apiResource('points', PointController::class);
});
