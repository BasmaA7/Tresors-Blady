<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Favoris;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FavorisController extends Controller
{


    public function index()
    {
        // Initialiser une variable pour stocker les favoris
        $favItems = [];
        
        // Récupérer les catégories
        $categories = Category::all();
        
        // Vérifier si l'utilisateur est authentifié
        if (auth()->check()) {
            // Récupérer les favoris de l'utilisateur authentifié avec les détails des produits associés
            $user = Auth::user();
            $favItems = $user->favItems()->with('product')->get();
        } else {
            // Si l'utilisateur n'est pas authentifié, vérifier s'il y a des favoris temporaires dans la session ou les cookies
            if (session()->has('wishlist')) {
                // Récupérer les identifiants des produits favoris temporaires
                $wishlist = session()->get('wishlist');
    
                // Récupérer les détails des produits favoris à partir des identifiants
                $favItems = Product::whereIn('id', $wishlist)->get();
            }
        }
        
        // Récupérer le nombre de favoris
        $favCount = count($favItems);
        
        // Passer les favoris et les catégories à la vue
        return view('Shop.favoris', compact('favItems', 'favCount', 'categories'));
    }
    
    
    
    


    
    public function add(int $id)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to add products to your wishlist.');
        }
    
        $productId = $id;
        $userId = auth()->id();
    
        // Vérifier si le produit est déjà dans la liste de favoris de l'utilisateur
        $existingItem = Favoris::where('product_id', $productId)
            ->where('user_id', $userId)
            ->first();
    
        if ($existingItem) {
            return redirect()->route('Shop.favoris')->with('error', 'Product already exists in wishlist');
        } else {
            // Ajouter le produit à la liste de favoris de l'utilisateur
            $favItem = new Favoris();
            $favItem->user_id = $userId;
            $favItem->product_id = $productId;
            $favItem->save();
        }
    
        return redirect()->route('Shop.favoris')->with('success', 'Product added to wishlist successfully');
    }
    
    

    



    



    /**
     * Remove a product from the wishlist.
     */
    public function delete($id)
    {

        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to add products to your wishlist.');
        }
        $favProduct = Favoris::findOrFail($id);
        $favProduct->delete();

        return redirect()->route('Shop.favoris')->with('success', 'Product removed from cart successfully');
    }
}
