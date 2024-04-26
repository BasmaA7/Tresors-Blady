<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(Request $request)

    {
        $user = Auth::user(); 

        $shopingcards = $user->shopingcards;
        $count = $shopingcards->count();
        if($request){
            $check = $request->session()->get('check');
        }
        $categories= Category::all();
        return view('Cart.index', compact('shopingcards','count','check','categories'));
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            $product_id = $request->input('product_id');
            $user_id = Auth::id();
    
            // Vérifie si le produit est déjà dans le panier de l'utilisateur
            $productCheck = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();
    
            if ($productCheck) {
                // Si le produit est déjà dans le panier, augmentez simplement la quantité
                $productCheck->increment('quantity'); 
                $cartInfo = "Product quantity increased in cart";
            } else {
                // Ajoute le produit au panier si ce n'est pas déjà le cas
                $cart = new Cart();
                $cart->user_id = $user_id;
                $cart->product_id = $product_id;
                $cart->quantity = '1';
                $cart->save();
                $cartInfo = "Product Added Successfully";
            }
    
            // Redirige vers la page du panier
            return redirect()->route('Cart.index')->with('cartInfo', $cartInfo);
        } else {
            // Gérer le cas où l'utilisateur n'est pas authentifié
            return redirect()->route('login')->with('error', 'You need to login to add products to the cart.');
        }
    }
    
    
    

  

    // Met à jour la quantité d'un produit dans le panier
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|numeric|min:1',
        ]);

        $cartItem = Cart::findOrFail($id);
        $cartItem->update([
            'quantity' => $request->input('quantity'),
        ]);

        return redirect()->route('cart.index')->with('success', 'Cart updated successfully');
    }

    // Supprime un produit du panier
  


    public function destroy(Request $request, $id)
    {
        Cart::where('user_id', Auth::id())->where('product_id', $id)->delete();
        $cartinfos = "Product was removed from cart";
        return redirect()->route('Cart.index')->with('cartinfos', $cartinfos);
    }
    


   
    
    public function check(Request $request)
    {   
        $product = Product::where('id', $request->product_id)->first();
        $stock = $product->quantity;
        if($request->number<=0){
            $check = [
                'check'=>"Enter a valid number",
                'id'=>$request->product_id
            ];
        }
        else if ($stock >= $request->number) {
            
            DB::table('carts')
            ->where('user_id',Auth::user()->id)
            ->where('product_id',$request->product_id)
            ->update(['quantity'=>$request->number]);
            $check = [
                'check'=>"in stock",
                'id'=>$request->product_id
            ];
        } else {
            $check = [
                'check'=> $request->number . " " . " " . $request->product_name ." unavaible for now ",
                'id'=>$request->product_id
            ];
        }

        return redirect()->route('Cart.index')->with('check', $check);
    }

}
