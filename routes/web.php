<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Services\ProductService;
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

Route ::get('/post/{post}/comment/{comment}', function (string $postID, string $comment ):mixed{
    return "Post ID:" . $postID ."-Comment: " . $comment;
});

Route ::get('/post/{id}', function (string $id):mixed{
    return  $id ;
}) ->where('id', '[0-9]+');

Route ::get('/search/{search}', function (string $search):mixed{
    return  $search ;
}) ->where('search', '.*');

Route ::get('/test/route', function (){
    return  route('test-route') ;
}) ->name('test-route');

Route ::middleware(['user-middleware'])->group(function (){
    Route ::get('route-middleware-group/first', function (Request $request){
        echo 'first';
    });
    Route ::get('route-middleware-group/second', function (Request $request){
        echo 'second';
    });

});

Route::controller(UserController::class)->group(function(){
    route::get('/user','index');
    route::get('/user/first','first');
    route::get('/user/{id}','show');
});


Route ::get('/token', function (Request $request){
   return view ('token');
});

Route ::post('/token', function (Request $request){
    return $request -> all();
 });

 Route::get('/user',[UserController::class, 'index']) -> middleware('user-middleware');

 Route::resource('products', ProductController::class);

 Route::get('/product-list', function (ProductService $productService){
    $data['products'] = $productService->listProducts();
    return view ('products.list', $data);
 });
