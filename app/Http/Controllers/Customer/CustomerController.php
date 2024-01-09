<?php

namespace App\Http\Controllers\Customer;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\CustomerEditRequest;
use App\Http\Requests\RegisterFormRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

            $customer->assignRole('Customer');

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

    public function showCustomerList()
    {
        $customers = Customer::select('id', 'name', 'phone', 'address', 'email')->withTrashed()->get();

        return view('admin.customerList', compact('customers'));
    }

    public function editCustomer(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('user.edit', compact('customer'));
    }

    public function updateCustomer(CustomerEditRequest $request, string $id)
    {
        try{
            $customer = Customer::findOrFail($id);
            $customer->name = $request->input('name');
            $customer->phone = $request->input('phone');
            $customer->address = $request->input('address');
            $customer->email = $request->input('email');
            $customer->save();

            return redirect()->route('customer.list')->with('success', 'Customer updated successfully');
        }catch(ModelNotFoundException $e){
            return back()->with('error', 'Customer not found');
        }catch(Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }

    public function destroy(string $id)
    {
        try{
            $customer = Customer::findOrFail($id);
            $customer->delete();
            return redirect()->route('customer.list')->with('success', 'Customer deleted successfully');
        }catch(ModelNotFoundException $e){
            return redirect()->route('customer.list')->with('error', 'Customer not found');
        }catch(Exception $e){
            return redirect()->route('customer.list')->with('error', $e->getMessage());
        }
    }

    public function restore(string $id)
    {
        try{
            $customer = Customer::onlyTrashed()->findOrFail($id);
            $customer->restore();
            return redirect()->route('customer.list')->with('success', 'Customer restored successfully');
        }catch(ModelNotFoundException $e){
            return redirect()->route('customer.list')->with('error', 'Customer not found');
        }catch(Exception $e){
            return redirect()->route('customer.list')->with('error', $e->getMessage());
        }
    }

    public function changePassword(PasswordRequest $request)
    {
        dd($request->all());
    }
}
