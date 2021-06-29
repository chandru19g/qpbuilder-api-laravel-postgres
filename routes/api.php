<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SectionController;
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

// !Route for Adding Details of the Question

Route::get('/question/get', [QuestionController::class, 'index']);
Route::post('/question/add', [QuestionController::class, 'store']);
Route::get('/question/show/{id}', [QuestionController::class, 'show']);
Route::put('/question/update/{id}', [QuestionController::class, 'update']);
Route::delete('/question/delete/{id}', [QuestionController::class, 'destroy']);

// !Route for Adding the Questions of the Particular Given Details

Route::get('/section/get', [SectionController::class, 'index']);
// Route::post('/section/add', [SectionController::class, 'create']);
Route::post('/section/create/{id}', [SectionController::class, 'create']);
Route::get('/section/show/{id}', [SectionController::class, 'show']);
Route::put('/section/update/{id}', [SectionController::class, 'update']);
Route::delete('/section/delete/{id}', [SectionController::class, 'destroy']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
