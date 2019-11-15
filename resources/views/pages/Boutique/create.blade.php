@extends('layouts.app')

@section('content')

<div class="cadre "class="container">

<h1>Ajouter un produit à la boutique</h1>

{!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
    
<div class="form-group">
    {{Form::label('name', 'Nom du produit')}}
    {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nom du Produit'])}}
</div>

<div class="form-group">
    {{Form::label('description', 'Description du produit')}}
    {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description du Produit'])}}
</div>

<div class="form-group">
    {{Form::label('price', 'Prix du produit')}}
    {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Prix du Produit'])}}
</div>

<div class="form-group">
    {{Form::label('Category_id', 'Catégorie du produit')}}
    {{Form::text('Category_id', '', ['class' => 'form-control', 'placeholder' => 'Catégorie du Produit'])}}
</div>


{{Form::submit('Ajouter le produit +', ['class' => 'btn btn-warning'])}}


{!! Form::close() !!}


</div>



@endsection