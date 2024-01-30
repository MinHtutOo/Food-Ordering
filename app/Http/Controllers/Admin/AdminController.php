<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\OwnerRequest;
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

    public function adminProfile()
    {
        return view('user.profile');
    }

    public function showOwnerList()
    {
        $owners = User::role('owner')->with('restaurant')->get();

        foreach ($owners as $owner) {
            // Accessing the restaurant for each owner
            $restaurant = $owner->restaurant;
            // You can do something with $restaurant here
        }

        return view('admin.ownerList', compact('owners'));
    }

    public function createOwner()
    {
        return view('admin.createOwner');
    }

    public function storeOwner(OwnerRequest $request)
    {
        try{
            $owner = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => bcrypt($request->password),
            ]);
    
            $owner->assignRole('owner');
            dd($owner);

            return redirect()->route('owner.list')->with('success', 'Owner created successfully');
        }catch(Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function showOrderList()
    {
        return view('admin.orderList');
    }
}