<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function showAllRestaurant()
    {
        return view('restaurant.index');
    }

    public function showMenu()
    {
        return view('restaurant.menu');
    }

    public function showDetail()
    {
        return view('restaurant.detail');
    }

    public function showOrder()
    {
        return view('restaurant.orderList');
    }

}
