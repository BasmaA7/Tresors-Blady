<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
   
  public function index()
  {
      $user = Auth::user();
      $categories = Category::all();
      $orders = Order::where('user_id', $user->id)->get();
      $totalOrdersCount = $orders->count();

      return view('orders.index', compact('orders','categories','totalOrdersCount'));
  }
  

    
}
