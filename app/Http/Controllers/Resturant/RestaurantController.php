<?php

namespace App\Http\Controllers\Resturant;

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
}
