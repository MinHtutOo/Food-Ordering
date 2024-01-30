<?php

namespace App\Http\Controllers\Customer;

use Exception;
use App\Models\Menu;
use App\Models\Order;
use Stripe\StripeClient;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrderController extends Controller
{
    // Add to Cart Start
    public function addCart(string $id)
    {   
        try{
            $menu = Menu::findOrFail($id);
            $restaurantId = $menu->restaurant_id;

            $order = OrderItem::create([
                'customer_id' => auth()->user()->id,
                'menu_id' => $menu->id,
                'quantity' => 1,
                'status' => 'pending',
                'sub_total' => $menu->price,
                'grand_total' => $menu->price,
            ]);
            //dd($order);\

            return redirect()->route('menu' , $restaurantId)->with('success', 'Add to Cart Successfully');
        }catch(Exception $e){
            return redirect()->back()->with('error', 'Something went wrong' . $e->getMessage());
        } 
    }

    public function remove(string $id)
    {
        $order = OrderItem::findOrFail($id);
        $order->delete();
        return redirect()->route('user.cart')->with('success', 'Remove from cart successfully');
    }

    public function restore(string $id)
    {
        $order = OrderItem::onlyTrashed()->findOrFail($id);
        $order->restore();
        return redirect()->route('user.cart')->with('success', 'Successfully Restored');
    }

    public function forceDestroy(string $id)
    {
        $order = OrderItem::onlyTrashed()->findOrFail($id);
        $order->forceDelete();
        return redirect()->route('user.cart')->with('success', 'Successfully Deleted');
    }

    // Add to Cart End

    public function checkout()
    {
        $customer = auth()->user();
        $orders = OrderItem::with('menu')->where('customer_id', $customer->id)->get();
        
        return view('user.checkout', compact('customer', 'orders'));
    }

    public function placeOrder(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'payment_method' => 'required',
            ]);

            $paymentMethod = $request->input('payment_method');

            if ($paymentMethod === 'stripe') {
                $stripe = new StripeClient('sk_test_51O6oVWEBeZfFRhurWfEc9idLLEP6pHHOyqLf78SJOiChvXpy9yoKzzFXXUmfTl06qNSGcike4ww7YStNRlnOewU600nsolDbtH');

                $productNames = $request->input('product_names');
                $productPrices = $request->input('product_prices');

                $lineItems = [];
                foreach ($productNames as $index => $productName) {
                    $lineItems[] = [
                        'price_data' => [
                            'currency' => 'usd',
                            'product_data' => [
                                'name' => $productName,
                            ],
                            'unit_amount' => $productPrices[$index] * 100, // Convert price to cents
                        ],
                        'quantity' => 1,
                    ];
                }

                $checkoutSession = $stripe->checkout->sessions->create([
                    'payment_method_types' => ['card'],
                    'line_items' => $lineItems,
                    'mode' => 'payment',
                    'success_url' => route('payment.success'),
                    'cancel_url' => route('payment.fail'),
                ]);

                return redirect($checkoutSession->url);
            }

            return redirect()->route('payment.success');
        }

        $customer = auth()->user();
        $orders = OrderItem::with('menu')->where('customer_id', $customer->id)->get();

        return view('user.checkout', compact('orders', 'customer'))->with('success', 'Payment Successfully!');
    }

    public function paymentSuccess()
    {
        $customer = auth()->user();
        $orders = OrderItem::with('menu')->where('customer_id', $customer->id)->get();

        return view('paymentSuccess', compact('orders', 'customer'));
    }

    public function paymentFail()
    {
        $customer = auth()->user();
        $orders = OrderItem::with('menu')->where('customer_id', $customer->id)->get();

        return view('paymentFail', compact('orders', 'customer'));
    }
}
