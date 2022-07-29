<?php

use App\Http\Controllers\InstitutionController;
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

Route::middleware('api')->group(function(){

    Route::get('/institutions', [InstitutionController::class, 'searchOrSave']);

    Route::fallback(fn() => response()->json(
        ['code' => 404, 'message' => 'Route Not Found' ], 404
    ));
});



