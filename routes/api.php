<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
Route::apiResource('roles', \App\Http\Controllers\Api\RoleController::class);
Route::apiResource('cityforusers', \App\Http\Controllers\Api\CityForUsersController::class);
Route::apiResource('companies', \App\Http\Controllers\Api\CompanyController::class);
Route::get('address/regions', [App\Http\Controllers\Api\AddressController::class, 'getAllRegions']);
Route::get('address/localities/{id}', [App\Http\Controllers\Api\AddressController::class, 'getLocalitiesByRegionId']);
Route::get('address/cities/{id}', [App\Http\Controllers\Api\AddressController::class, 'getCitiesByLocalityId']);

