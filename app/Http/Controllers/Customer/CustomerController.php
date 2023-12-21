<?php

namespace App\Http\Controllers\Customer;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterFormRequest;

class CustomerController extends Controller
{
    public function create()
    {
        return view('user.signup');
    }

    public function store(RegisterFormRequest $request)
    {
        try {
            $customer = Customer::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            auth()->login($customer);

            return redirect()->route('login');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(LoginRequest $request)
    {
        try {
            $authenticate = $request->only('email', 'password');

            if (auth()->guard('customer')->attempt($authenticate)) {
                $request->session()->regenerate();
        
                auth()->user();

                return redirect('user/profile');
            } else {
                return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
            }
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();

        return redirect('/');
    }
}
