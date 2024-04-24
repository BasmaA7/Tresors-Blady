<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class StatistiqueController extends Controller
{
    public function getUsers()
    {
        $orderStats = $this->getOrderStats(); 
        $productStats = $this->getProductStats();

        // Passer toutes les données à la vue categories
        return view('aside', compact('orderStats', 'productStats'));      
    }

    public function getOrderStats()
    {
        // Récupérer le nombre de commandes en attente
        $pendingOrdersCount = Order::where('status', 1)->count();

        // Retourner le nombre de commandes en attente
        return $pendingOrdersCount;
    }

    public function getProductStats()
    {
        // Récupérer les 5 meilleurs produits vendus et le stock total
        $bestSellingProducts = Product::select('id', 'name')
            ->withCount('orders')
            ->orderByDesc('orders_count')
            ->limit(5)
            ->get();

        $totalStock = Product::sum('stock');

        // Retourner les meilleurs produits vendus et le stock total
        return compact('bestSellingProducts', 'totalStock');
    }
}
