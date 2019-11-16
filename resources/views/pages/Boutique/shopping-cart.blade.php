@extends('layouts.app')

@section('content')

@if(Session::has('cart'))

<section class="cadre">

<div class="row" style="padding:30px 0px 30px 0px">
        <div class="col-sm-6 col-md-6">
            <ul class="list-group list-group-flush">
                    @foreach($products as $product)
                    <li class="list-group-item" style="margin: 0px 10px 6px 10px">
                            <strong>{{ $product ['item'] ['name']}}</strong>
                            <span class="label label-primary">{{ $product ['price']}} €</span>  
                            <span class="badge badge-primary badge-pill">{{ $product['qty']}}</span>
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
<div class="row" style="padding-bottom:495px">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3"><a href="{{ route('Mails.sendemail')}}" class="btn btn-success btn-lg">Payer</a>
<a href="{{ route('product.deleteProduct')}}" class="btn btn-danger">Supprimer le panier</a>
    </div>
</div>

@else
<div class="cadre">
    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
   <h2 style="text-align: center; padding-top:50px"> Aucun produit dans votre panier, rendez vous dans la <a href="/products">Boutique</a> pour trouver votre bonheur</h2>
    </div>
</div>
@endif

</section>


@endsection