<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Resturant\RestaurantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/restaurant/index', function (){
    return view('menu');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('user/login', [AuthenticationController::class, 'login']);
Route::post('user/login', [AuthenticationController::class, 'authenticate']);

Route::get('user/signup', [AuthenticationController::class, 'create']);
Route::post('user/signup', [AuthenticationController::class, 'update']);

Route::get('user/cart', [UserController::class, 'addToCart']);

Route::get('user/checkout', [UserController::class, 'checkout']);

Route::get('user/profile', [UserController::class, 'viewProfile']);

Route::get('restaurant/index', [RestaurantController::class, 'showAllRestaurant']);

Route::get('restaurant/menu', [RestaurantController::class, 'showMenu']);

Route::get('/signup', function (){
    return view('signup');
});

Route::get('/shop', function (){
    return view('shop');
});