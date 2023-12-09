<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function addToCart() 
    {
        return view('backend.user.cart');
    }

    public function checkout()
    {
        return view('backend.user.checkout');
    }

    public function viewProfile()
    {
        return view('backend.user.profile');
    }
}
