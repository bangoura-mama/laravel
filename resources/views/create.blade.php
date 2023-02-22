<?php
@extends('layouts.app')

@section('content')
    <h1>Ajouter un produit</h1>
    <form action="{{ route('produits.store') }}" method="POST">
        @csrf
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom"><br>
        <label for="prix">Prix</label>
        <input type="number" step="0.01" name="prix" id="prix"><

?>
