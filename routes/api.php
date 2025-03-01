<?php

use App\Http\Middleware\UserMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route ::get('/user', function (Request $request) {
    echo 'Welcome API - Test Middleware';
}) ->middleware(UserMiddleware::class);



