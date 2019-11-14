@extends('layouts.app')

@section('content')

@if(Session::has('cart'))

<section class="cadre">

<div class="row">
        <div class="col-sm-6 col-md-6">
            <ul class="list-group">
                    @foreach($products as $product)
                    <li class="list-group-item">
                            <span class="badge badge-success">{{ $product ['qty']}}</span>
                            <strong>{{ $product ['item'] ['name']}}</strong>
                            <span class="label label-primary">{{ $product ['price']}} €</span>
                    </li>
                    @endforeach
            </ul>
        </div>
</div>

<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
    <strong>Prix total : {{$totalPrice}} €</strong>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
<button type="button" class="btn btn-success btn-lg">Payer</button> <button type="button" class="btn btn-danger">Supprimer le panier</button>
    </div>
</div>

@else
<div class="row">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
   <h2> Aucun produit dans votre panier</h2>
    </div>
</div>
@endif

</section>


@endsection