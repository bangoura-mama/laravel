<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    // méthode pour afficher tous les produits
    public function index()
    {
        $produits = Produit::all(); // récupère tous les produits
        return view('produits.index', ['produits' => $produits]); // retourne la vue avec les produits
    }

    // méthode pour afficher un produit spécifique
    public function show($id)
    {
        $produit = Produit::findOrFail($id); // récupère le produit par son ID ou retourne une erreur 404 si non trouvé
        return view('produits.show', ['produit' => $produit]); // retourne la vue avec le produit
    }

    // méthode pour créer un nouveau produit
    public function store(Request $request)
    {
        $produit = new Produit;
        $produit->nom = $request->input('nom');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->quantite = $request->input('quantite');
        $produit->save();

        return redirect('/produits'); // redirige vers la liste des produits
    }

    // méthode pour mettre à jour un produit existant
    public function update(Request $request, $id)
    {
        $produit = Produit::findOrFail($id); // récupère le produit par son ID ou retourne une erreur 404 si non trouvé
        $produit->nom = $request->input('nom');
        $produit->prix = $request->input('prix');
        $produit->description = $request->input('description');
        $produit->quantite = $request->input('quantite');
        $produit->save();

        return redirect('/produits'); // redirige vers la liste des produits
    }

    // méthode pour supprimer un produit existant
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id); // récupère le produit par son ID ou retourne une erreur 404 si non trouvé
        $produit->delete();

        return redirect('/produits'); // redirige vers la liste des produits
    }
}
