<?php

namespace App\RequestHandlers;

use App\Services\Auth\CreateUser;
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

Route::group(["prefix" => "v1"],
    function () {
    Route::group(["prefix" => "user"], function() {
        Route::post('/create', [CreateUser::class, "create"]);

    });
    Route::group(["prefix" => "brands"], function() {
        Route::post('/create', Brand\CreateBrandHandler::class);

    });


});
