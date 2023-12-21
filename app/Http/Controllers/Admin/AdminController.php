<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerEditRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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

            return redirect()->route('customer.list');
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

    public function showOwnerList()
    {
        return view('admin.ownerList');
    }

    public function showOrderList()
    {
        return view('admin.orderList');
    }
}
