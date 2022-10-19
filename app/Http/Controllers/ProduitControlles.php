<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitControlles extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produit=Produit::all();
        
        return view('produit.index',compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('produit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produit= new \App\Models\Produit;
        $produit->libelle=$request->libelle;
        $produit->prix_ut=$request->prix_ut;
        $produit->quantite=$request->quantite;
        $produit->save();
        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produit=Produit::findOrFail($id);
        return view('produit.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produit=Produit::findOrFail($id);
        return view('produit.edit',compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produit= Produit::find($id);
        $produit->libelle=$request->libelle;
        $produit->prix_ut=$request->prix_ut;
        $produit->quantite=$request->quantite;
        $produit->save();
        return redirect()->route('produits.index')
                         ->with('succes','produit modifier avec success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produit=Produit::find($id)->delete();

        return redirect()->route('produits.index')
                         ->with('success','Produit supprimer avec success');

    }
}
