<?php

use App\Http\Controllers\HariController;
use App\Http\Controllers\PelajaranController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('pelajaran', PelajaranController::class)->except(['index','store']);
Route::apiResource('jadwal', HariController::class)->parameters(['jadwal' => 'hari'])
                                                ->except(['store','destroy','update']);
Route::post('jadwal/{hari}', [HariController::class,'store']);
