<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.signup');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterFormRequest $request)
    {
        try{
            $user = User::create([
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'address' => $request->input('address'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            ]);

            auth()->login($user);

            return redirect("user/login");
        }catch(Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'User creation failed. Please try again.']);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();

        return redirect('/');
    }

    public function login() 
    {
        return view('user.login');
    }

    public function authenticate(LoginRequest $request)
    {
        $authenticate = $request->only('email', 'password');

        if (auth()->attempt($authenticate)) {
            $request->session()->regenerate();

            $user = auth()->user();

            return redirect('user/profile');
        }
        return back()->withErrors(['email' => 'Invalid credentials'])->onlyInput('email');
    }

}
