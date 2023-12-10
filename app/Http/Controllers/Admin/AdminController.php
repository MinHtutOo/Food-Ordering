<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.admin.index');
    }

    public function showAllRole()
    {
        return view('backend.admin.role');
    }

    public function givePermission()
    {
        return view('backend.admin.permission');
    }

    public function showCustomerList()
    {
        return view('backend.admin.customerList');
    }

    public function showOwnerList()
    {
        return view('backend.admin.ownerList');
    }

    public function showOrderList()
    {
        return view('backend.admin.orderList');
    }
}
