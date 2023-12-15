<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
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

        $user = User::create([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        $user->save();

        auth()->login($user);

        return redirect("user/login");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login() 
    {
        return view('backend.user.login');
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
