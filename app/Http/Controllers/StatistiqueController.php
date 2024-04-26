<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function index()
    {
        $totalOrdersCount = Order::count();
        $totalProductsCount = Product::count();
        $totalUsersCount = User::count(); 


        return view('Statistique', compact('totalOrdersCount', 'totalProductsCount','totalUsersCount'));
    }
}
