<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\CartController;
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

Route::get('/about', function (){
    return view('about');
});

Route::get('/contact', function (){
    return view('contact');
});

Route::get('restaurant', [Restaurant\RestaurantController::class, 'showAllRestaurant'])->name('restaurants');
Route::get('restaurant/{id}/menu', [Restaurant\RestaurantController::class, 'showMenu'])->name('menu');

// Route for Auth admin and owner
Route::group(['prefix'=> 'admin', 'namespace' => 'admin'], function () {
    Route::get('/', [Admin\AdminController::class, 'adminLogin']);
    Route::post('/', [Admin\AdminController::class, 'adminAuthenticate']);

    Route::group(['middleware' => ['auth:web']], function () {
        Route::post('logout', [Admin\AdminController::class, 'adminLogout'])->name('admin.logout');
        Route::get('profile', [Admin\AdminController::class, 'adminProfile'])->name('admin.profile');
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

        Route::get('restaurant', [Restaurant\RestaurantController::class, 'index'])->name('myRestaurant');
        Route::get('restaurants/list', [Restaurant\RestaurantController::class, 'showRestaurantList'])->name('restaurant.list');
        Route::get('restaurants/create', [Restaurant\RestaurantController::class, 'create'])->name('restaurant.create');
        Route::post('restaurants/create', [Restaurant\RestaurantController::class, 'store'])->name('restaurant.store');
        Route::get('restaurants/{id}/edit', [Restaurant\RestaurantController::class, 'edit'])->name('restaurant.edit');
        Route::put('restaurants/{id}/update', [Restaurant\RestaurantController::class, 'update'])->name('restaurant.update');
        Route::delete('restaurants/{id}/destroy', [Restaurant\RestaurantController::class, 'destroy'])->name('restaurant.destroy');
        Route::get('restaurants/{id}/restore', [Restaurant\RestaurantController::class, 'restore'])->name('restaurant.restore');
        
        Route::get('category', [Restaurant\CategoryController::class, 'index'])->name('category.index');
        Route::get('category/create', [Restaurant\CategoryController::class, 'create'])->name('category.create');
        Route::post('category/create', [Restaurant\CategoryController::class, 'store'])->name('category.store');
        Route::get('category/{id}/edit', [Restaurant\CategoryController::class, 'edit'])->name('category.edit');
        Route::put('category/{id}/update', [Restaurant\CategoryController::class, 'update'])->name('category.update');
        Route::delete('category/{id}/destroy', [Restaurant\CategoryController::class, 'destroy'])->name('category.destroy');
        Route::get('category/{id}/restore', [Restaurant\CategoryController::class, 'restore'])->name('category.restore');

        Route::get('menu/create', [Restaurant\MenuController::class, 'create'])->name('menu.create');
        Route::post('menu/create', [Restaurant\MenuController::class, 'store'])->name('menu.store');
        Route::get('menu/{id}/edit', [Restaurant\MenuController::class, 'edit'])->name('menu.edit');
        Route::put('menu/{id}/update', [Restaurant\MenuController::class, 'update'])->name('menu.update');
        Route::delete('menu/{id}/destroy', [Restaurant\MenuController::class, 'destroy'])->name('menu.destroy');
        Route::get('menu/{id}/restore', [Restaurant\MenuController::class, 'restore'])->name('menu.restore');
        Route::delete('menu/{id}/forceDestroy', [Restaurant\MenuController::class, 'forceDestroy'])->name('menu.forceDestroy');
        Route::get('menu/{id}/detail', [Restaurant\MenuController::class, 'detail'])->name('menu.detail');
    });
    
});

// Route for Auth customer
Route::get('user/login', [Customer\CustomerController::class, 'login'])->name('login');
Route::post('user/login', [Customer\CustomerController::class, 'authenticate'])->name('auth');
Route::get('user/signup', [Customer\CustomerController::class, 'create'])->name('signup');
Route::post('user/signup', [Customer\CustomerController::class, 'store'])->name('store');

Route::middleware(['auth:customer'])->group(function () {
    Route::post('logout', [Customer\CustomerController::class, 'logout'])->name('logout');
    Route::get('user/cart', [User\UserController::class, 'cart'])->name('user.cart');
    Route::get('user/checkout', [User\UserController::class, 'checkout']);
    Route::get('user/profile', [User\UserController::class, 'viewProfile']);

    Route::get('restaurants/{id}/detail', [Restaurant\RestaurantController::class, 'detail'])->name('restaurant.detail');
    Route::get('menu/{id}/detail', [Restaurant\MenuController::class, 'viewDetail'])->name('menuItem.detail');

    Route::post('addCart/{id}', [Customer\OrderController::class, 'addCart'])->name('addCart');
    Route::delete('remove/{id}', [Customer\OrderController::class, 'remove'])->name('remove');
    Route::get('restore/{id}', [Customer\OrderController::class, 'restore'])->name('restore');
});

Route::get('restaurant/menu', [Restaurant\RestaurantController::class, 'showMenu']);
Route::get('restaurant/order', [Restaurant\RestaurantController::class, 'showOrder']);

Route::get('/signup', function (){
    return view('signup');
});

Route::get('/shop', function (){
    return view('shop');
});