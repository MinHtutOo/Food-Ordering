<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\User;
use App\Http\Controllers\Customer;
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

Route::get('user/login', [Customer\CustomerController::class, 'login'])->name('login');
Route::post('user/login', [Customer\CustomerController::class, 'authenticate'])->name('auth');
Route::get('user/signup', [Customer\CustomerController::class, 'create'])->name('signup');
Route::post('user/signup', [Customer\CustomerController::class, 'store'])->name('store');
Route::post('logout', [Customer\CustomerController::class, 'logout'])->name('logout');

Route::group(['prefix'=> 'admin', 'namespace' => 'admin'], function () {
    Route::get('/', [Admin\AdminController::class, 'adminLogin']);
    Route::post('/', [Admin\AdminController::class, 'adminAuthenticate']);

    Route::group(['middleware' => ['auth']], function () {
        Route::post('logout', [Admin\AdminController::class, 'adminLogout']);
        Route::get('dashboard', [Admin\AdminController::class, 'index'])->name('dashboard');
        Route::get('owners', [Admin\AdminController::class, 'showOwnerList']);

        Route::get('role', [Admin\RoleController::class, 'index'])->name('role.index');
        Route::get('role/create', [Admin\RoleController::class, 'create'])->name('role.create');
        Route::post('role/create', [Admin\RoleController::class, 'store'])->name('role.store');
        Route::get('role/{id}/edit', [Admin\RoleController::class, 'edit'])->name('role.edit');
        Route::put('role/{id}/update', [Admin\RoleController::class, 'update'])->name('role.update');
        Route::delete('role/{id}/destroy', [Admin\RoleController::class, 'destroy'])->name('role.destroy');

        Route::get('{id}/permission', [Admin\RoleController::class, 'permission'])->name('user.permission');
        Route::put('{id}/assignPermission', [Admin\RoleController::class, 'assignPermission'])->name('user.assignPermission');

        Route::get('customers', [Customer\CustomerController::class, 'showCustomerList'])->name('customer.list');
        Route::get('customers/{id}/edit', [Customer\CustomerController::class, 'editCustomer'])->name('customer.edit');
        Route::put('customers/{id}/update', [Customer\CustomerController::class, 'updateCustomer'])->name('customer.update');
        Route::delete('customers/{id}/destroy', [Customer\CustomerController::class, 'destroy'])->name('customer.destroy');
        Route::get('customers/{id}/restore', [Customer\CustomerController::class, 'restore'])->name('customer.restore');
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