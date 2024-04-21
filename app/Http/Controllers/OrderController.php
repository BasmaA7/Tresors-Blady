<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
   
  public function index()
  {
      // Récupérer les commandes de l'utilisateur connecté
      $user = Auth::user();
      $orders = Order::where('user_id', $user->id)->get();
      
      // Retourner la vue avec les commandes
      return view('orders.index', compact('orders'));
  }
  

    
    
}
