
<?php
@extends('layouts.app')


@section('content')
    <h1>Liste des produits</h1>
    <ul>
        @foreach ($produits as $produit)
            <li>
                <a href="{{ route('produits.show', $produit->id) }}">
                    {{ $produit->nom }} - {{ $produit->prix }} €
                </a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('produits.create') }}">Ajouter un produit</a>
@endsection


?>
