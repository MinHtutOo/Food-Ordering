<?php

namespace App\Http\Controllers\Customer;

use Exception;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function addCart(string $id)
    {   
        try{
            $menu = Menu::findOrFail($id);
            $restaurantId = $menu->restaurant_id;

            $order = Order::create([
                'customer_id' => auth()->user()->id,
                'menu_id' => $menu->id,
                'status' => 'pending',
                'sub_total' => $menu->price,
                'grand_total' => $menu->price,
            ]);
            //dd($order);

            return redirect()->route('menu' , $restaurantId)->with('success', 'Add to Cart Successfully');
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong' . $e->getMessage());
        } 
    }

    public function remove(string $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('user.cart')->with('success', 'Remove from cart successfully');
    }

    public function restore(string $id)
    {
        $order = Order::onlyTrashed()->findOrFail($id);
        $order->restore();
        return redirect()->route('user.cart')->with('success', 'Successfully Restored');
    }
}
