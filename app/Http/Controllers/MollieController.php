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
        $totalAmount = $user->shopingcards->sum(function ($cart) {
            return $cart->product->price * $cart->quantity;
        });    
        // Store the quantity in the session
        $quantity = $user->products->count();
        session()->put('quantity', $quantity);
    
        $currency = "EUR";
    
        if (Auth::check() && !Discount::where('user_id', $user->id)->exists()) {
            // Apply a discount of 15% to the total amount
            $discountedAmount = $totalAmount * 0.15;
            $totalAmount -= $discountedAmount;
    
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
                "value" => number_format($totalAmount, 2, '.', ''), 
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
        $user = Auth::user();
    
        $payment = Mollie::api()->payments->get($paymentId);
    
        if ($payment->isPaid()) {
            $totalAmount = $user->shopingcards->sum(function ($cart) {
                return $cart->product->price * $cart->quantity;
            });
    
            $product_ids = $user->shopingcards->pluck('product_id');
    
            $order = Order::create(["user_id" => $user->id, "total_amount" => $totalAmount, "status" => 1]);
            $order->products()->attach($product_ids);
    
            // Décrémenter la quantité de produits disponibles
            foreach ($user->shopingcards as $cart) {
                $product = $cart->product;
                $product->quantity -= $cart->quantity;
                $product->save();
            }
    
            // Supprimer prd  après la commande
            $user->shopingcards()->delete();
    
            $discount = Discount::where('user_id', $user->id)->exists();
    
            $paymentObj = new Payment();
            $paymentObj->payment_id = $paymentId;
            $paymentObj->quantity = $user->shopingcards->sum('quantity');
            $paymentObj->amount = $payment->amount->value;
            $paymentObj->currency = $payment->amount->currency;
            $paymentObj->payment_status = "Completed";
            $paymentObj->payment_method = "Mollie";
            $paymentObj->user_id = $user->id;
            $paymentObj->order_id = $order->id;
    
            if (!$discount) {
                $discountObj = new Discount();
                $discountObj->user_id = $user->id;
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
