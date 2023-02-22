<?php
@extends('layouts.app')

@section('content')
    <h1>{{ $produit->nom }}</h1>
    <p>{{ $produit->description }}</p>
    <p>Prix : {{ $produit->prix }} €</p>
    <p>Quantité : {{ $produit->quantite }}</p>
    <a href="{{ route('produits.edit', $produit->id) }}">Modifier</a>
    <form action="{{ route('produits.destroy', $produit->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
@endsection

?>
