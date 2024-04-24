<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use Mollie\Laravel\Facades\Mollie;
use App\Models\Payment; // Corrected typo
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MollieController extends Controller
{
    public function mollie(Request $request)
    {
        $user = Auth::user();
        $amount = $user->products->sum('price');
    
        // Store the quantity in the session
        $quantity = $user->products->count();
        session()->put('quantity', $quantity);
    
        // Make sure currency code is in uppercase
        $currency = "EUR";
    
        // Check if the user is authenticated and has not already used the discount
        if (Auth::check() && !Discount::where('user_id', $user->id)->exists()) {
            // Apply a discount of 15% to the total amount
            $discountedAmount = $amount * 0.15;
            $amount -= $discountedAmount;
    
            // Create a record of the discount for the user if they have any orders
            $latestOrder = $user->latestOrder();
            if ($latestOrder) {
                Discount::create([
                    'user_id' => $user->id,
                    'order_id' => $latestOrder->id,
                    'discount' => $discountedAmount,
                ]);
            }
        }
    
        // Create payment with Mollie API
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => $currency,
                "value" => number_format($amount, 2, '.', ''),
            ],
            "description" => "Payment for your product",
            "redirectUrl" => route('success'),
        ]);
    
        session()->put('paymentId', $payment->id);
    
        return redirect($payment->getCheckoutUrl(), 303);
    }

    public function success(Request $request)
    {
        $paymentId = session()->get('paymentId');
        $quantity = session()->get('quantity');
    
        $payment = Mollie::api()->payments->get($paymentId);
    
        if ($payment->isPaid()) {
            $user = Auth::user();
            $product_ids = $user->products->pluck('id');
            $amount = $user->products->sum('price');
            $order = Order::create(["user_id" => $user->id, "total_amount" => $amount, "status" => 1]);
            $order->products()->attach($product_ids);
    
            // Décrémenter la quantité de produits disponibles
            foreach ($user->products as $product) {
                $product->quantity -= 1;
                $product->save();
            }
    
            // Supprimer les produits de l'utilisateur après la commande
            $user->products()->sync([]);
    
            $discount = Discount::where('user_id', $user->id)->exists();
    
            $paymentObj = new Payment(); 
            $paymentObj->payment_id = $paymentId;
            $paymentObj->quantity = $quantity;
            $paymentObj->amount = $payment->amount->value;
            $paymentObj->currency = $payment->amount->currency;
            $paymentObj->payment_status = "Completed";
            $paymentObj->payment_method = "Mollie";
            $paymentObj->user_id = Auth::id();
            $paymentObj->order_id = $order->id;
    
            if (!$discount) {
                $discountObj = new Discount();
                $discountObj->user_id = Auth::id();
                $discountObj->order_id = $order->id;
                $discountObj->discount = 15;
                $discountObj->save();
            }
    
            $paymentObj->save();
    
            return redirect()->route('order.index');
        } else {
            return redirect()->route('home');
        }
    }
    

    public function cancel()
    {
        echo "Payment is cancelled.";
    }
}
