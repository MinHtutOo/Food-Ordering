<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{
    public function adminLogin()
    {
        return view('admin.login');
    }

    public function adminAuthenticate(LoginRequest $request)
    {
        try{
            $authenticate = $request->only('email', 'password');
            if (auth()->attempt($authenticate)) {
                $request->session()->regenerate();

                $user = auth()->user();
        
                return redirect('admin/dashboard');
            }
        }
        catch(Exception $e) {
            return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
        } 
    }

    public function adminLogout(Request $request)
    {
        auth()->logout();

        return redirect('admin');
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function showOwnerList()
    {
        return view('admin.ownerList');
    }

    public function showOrderList()
    {
        return view('admin.orderList');
    }
}
