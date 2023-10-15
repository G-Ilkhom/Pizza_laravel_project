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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function () {
    Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\AuthController::class, 'refresh']);
    Route::post('me', [\App\Http\Controllers\AuthController::class, 'me']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('posts', \App\Http\Controllers\PostController::class)->middleware('jwt.auth');

//// Регистрация/Авторизация
//Route::post('register', 'AuthController@register');
//Route::post('login', 'AuthController@login');
//
//// CRUD Адреса
//Route::middleware('auth:api')->resource('addresses', 'AddressController');
//
//// CRUD Категории товаров
//Route::middleware('auth:api')->resource('categories', 'CategoryController');
//
//// CRUD Товары
//Route::middleware('auth:api')->resource('products', 'ProductController');
//
//// CRUD Заказы
//Route::middleware('auth:api')->resource('orders', 'OrderController');
