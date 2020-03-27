<?php

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


Route::group(['middleware' => ['auth:api', 'mayifit/core-permission'], 'prefix' => 'api/v1'], function () {
    Route::namespace('MayIFit\Core\Translation\Http\Controllers\API')->prefix('admin')->name('api.admin.')->group(function() { 
        Route::apiResource('translation', 'TranslationController', ['except' => ['create', 'edit', 'destroy']]);
    });
});

