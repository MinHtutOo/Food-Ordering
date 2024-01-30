<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function cart() 
    {
        $cartItems = OrderItem::with('menu')->withTrashed()->where('status', 'pending')->get();

        return view('user.cart', compact('cartItems'));
    }

    public function viewProfile()
    {
        return view('user.profile');
    }
}
