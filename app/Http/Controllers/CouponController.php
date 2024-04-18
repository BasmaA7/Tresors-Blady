<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;

class CouponController extends Controller
{
    public function index()
    {
        // Récupérer tous les coupons depuis la base de données
        $coupons = Coupon::all();
        
        // Retourner la vue avec les données des coupons
        return view('admin.coupons.index', compact('coupons'));
    }

    public function create()
    {
        // Retourner la vue pour créer un nouveau coupon
        return view('admin.coupons.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'code' => 'required|unique:coupons',
            'discount_amount' => 'required|numeric|min:0',
            'expires_at' => 'required|date',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        // Créer un nouveau coupon avec les données validées
        Coupon::create($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('coupons.index')->with('success', 'Coupon créé avec succès.');
    }

    public function edit($id)
    {
        // Récupérer le coupon à éditer
        $coupon = Coupon::findOrFail($id);

        // Retourner la vue d'édition avec les données du coupon
        return view('admin.coupons.edit', compact('coupon'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'code' => 'required|unique:coupons,code,'.$id,
            'discount_amount' => 'required|numeric|min:0',
            'expires_at' => 'required|date',
            // Ajoutez d'autres règles de validation au besoin
        ]);

        // Mettre à jour le coupon avec les données validées
        $coupon = Coupon::findOrFail($id);
        $coupon->update($request->all());

        // Rediriger avec un message de succès
        return redirect()->route('coupons.index')->with('success', 'Coupon mis à jour avec succès.');
    }

    public function destroy($id)
    {
        // Trouver et supprimer le coupon
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();

        // Rediriger avec un message de succès
        return redirect()->route('coupons.index')->with('success', 'Coupon supprimé avec succès.');
    }
}

