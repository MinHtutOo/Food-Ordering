<?php

namespace App\Http\Controllers\Restaurant;

use App\Http\Controllers\Controller;
use App\Http\Requests\RestaurantRequest;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function showAllRestaurant()
    {
        return view('restaurant.index');
    }

    public function create()
    {
        return view('restaurant.create');
    }

    public function store(RestaurantRequest $request)
    {
        $file = $request->file('image');
    

        Restaurant::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'opening_hour' => $request->input('opening_hour'),
            'closing_hour' => $request->input('closing_hour'),
            'image' => $request->input('image'),
        ]);
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
