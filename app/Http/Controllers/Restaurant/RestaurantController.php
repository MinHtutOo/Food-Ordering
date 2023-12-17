<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function showAllRestaurant()
    {
        return view('backend.restaurant.index');
    }

    public function showMenu()
    {
        return view('backend.restaurant.menu');
    }

    public function showDetail()
    {
        return view('backend.restaurant.detail');
    }

    public function showOrder()
    {
        return view('backend.restaurant.orderList');
    }

}
