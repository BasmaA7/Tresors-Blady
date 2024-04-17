<?php

namespace App\Http\Controllers;
use Mollie\Laravel\Facades\Mollie;
use App\Models\Payement;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MollieController extends Controller
{
    public function mollie(Request $request)
    {
        $user = Auth::user();
        $amount = $user->products->sum('price');
      

         
         
        
        // Make sure currency code is in uppercase
        $currency = "EUR";
        
        // Create payment with Mollie API
        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => $currency,
                "value" => number_format( $amount, 2, '.', ''),
            ],
            "description" => "Payment for your product",
            "redirectUrl" => route('success'),
        ]);

        session()->put('paymentId', $payment->id);
        


            return redirect($payment->getCheckoutUrl(), 303);
    }


    public function succes(Request $request)
    {


        $paymentId = session()->get('paymentId');
        //dd($paymentId);
        $payment = Mollie::api()->payments->get($paymentId);
        //dd($payment);
        if($payment->isPaid())
        {
            $user = Auth::user();
            $product_ids = $user->products->pluck('id');
            $amount = $user->products->sum('price');
            $order =  Order::create(["user_id"=> $user->id  , "total_amount" => $amount ,  "status" => 1]  );   
            $order->products()->attach($product_ids);
            $user->products()->sync([]);


            $obj = new Payement();
            $obj->payment_id = $paymentId;
            $obj->quantity = session()->get('quantity');
            $obj->amount = $payment->amount->value;
            $obj->currency = $payment->amount->currency;
            $obj->payment_status = "Completed";
            $obj->payment_method = "Mollie";
            // $obj->user_id = Auth::user()->id;
            $obj->user_id = Auth::id();     
            $obj->order_id = $order->id;

            $obj->save();
            


            
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