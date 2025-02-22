<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Services\UserService;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;


Route::get('/', function () {
    return view('welcome');
});

Route ::get('/test-container', function (Request $request):mixed{
    $input = $request->input('key');
    return $input;
});

Route::get('/test-provider', function (UserService $userService):mixed{
    return $userService->ListUsers();
});

Route::get('/test-user',[UserController::class,'index']);

Route::get('/test-facade', function (UserService $userService):mixed{
    return Response::json($userService->ListUsers());
});
