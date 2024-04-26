<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $categories = Category::all();
        $orders = Order::where('user_id', $user->id)->get(); 
        $products = Product::where('name', $user->id)->get(); 
        return view('Profile.show', compact('user', 'orders', 'products', 'categories'));
    }

   
}
