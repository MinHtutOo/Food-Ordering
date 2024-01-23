<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function cart() 
    {
        $cartItems = Order::with('menu')->withTrashed()->where('status', 'pending')->get();

        return view('user.cart', compact('cartItems'));
    }

    public function checkout()
    {
        return view('user.checkout');
    }

    public function viewProfile()
    {
        return view('user.profile');
    }
}
