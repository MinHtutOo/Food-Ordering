<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\User;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Restaurant;
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
Route::post('user/signup', [AuthenticationController::class, 'store']);

Route::post('logout', [AuthenticationController::class, 'logout']);

Route::group(['prefix'=> 'admin', 'namespace' => 'admin'], function () {
    Route::get('/', [Admin\AdminController::class, 'adminLogin']);
    Route::post('/', [Admin\AdminController::class, 'adminAuthenticate']);

    Route::group(['middleware' => ['auth']], function () {
        Route::post('logout', [Admin\AdminController::class, 'adminLogout']);
        Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('dashboard');

        Route::get('role', [Admin\AdminController::class, 'showAllRole']);
        Route::get('role/create', [Admin\AdminController::class, 'createRole']);
        Route::post('role/create', [Admin\AdminController::class, 'storeRole']);
        
        Route::get('permission', [Admin\AdminController::class, 'givePermission']);
        Route::get('customers', [Admin\AdminController::class, 'showCustomerList']);
        Route::get('owners', [Admin\AdminController::class, 'showOwnerList']);
    });
    
});

Route::get('user/cart', [User\UserController::class, 'addToCart']);

Route::get('user/checkout', [User\UserController::class, 'checkout']);

Route::get('user/profile', [User\UserController::class, 'viewProfile']);

Route::get('restaurant/index', [Restaurant\RestaurantController::class, 'showAllRestaurant']);
Route::get('restaurant/menu', [Restaurant\RestaurantController::class, 'showMenu']);
Route::get('restaurant/detail', [Restaurant\RestaurantController::class, 'showDetail']);
Route::get('restaurant/order', [Restaurant\RestaurantController::class, 'showOrder']);

Route::get('/signup', function (){
    return view('signup');
});

Route::get('/shop', function (){
    return view('shop');
});