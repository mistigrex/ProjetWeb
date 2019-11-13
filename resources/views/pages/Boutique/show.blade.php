@extends('layouts.app')

@section('content')

<div class="container" id="ProduitShow">
    <div class="row">
      <div class="col-md-4 product"><img src="{{$product->image}}" alt="t-shirt" class="img-fluid"></div>
      <div class="col-md-8 info">
        <div class="info-wrapper">
        <h2 >{{$product->name}}</h2>
          <p class="lead">
            {{$product->description}}
          </p>
          <ul class="product-info list-unstyled">
            <li class="size">
              <select title="Choisi ta taille" class="selectpicker">
                <option value="small">Small</option>
                <option value="medium">Medium</option>
                <option value="large">Large</option>
                <option value="x-large">X-Large</option>
              </select>
            </li>
            <li class="Taille">
              <div class="product-quantity">
                <div class="minus-btn"><i class="icon-android-remove"></i></div>
                <input type="text" placeholder="T'en veux combien frère ?" class="quantity">
                <div class="plus-btn"><i class="icon-android-add"></i></div>
              </div>
            </li>
            <li class="price">{{$product->price}} €</li>
            
          </ul>
     
        </div><a href="#" class="add-to-cart btn btn-primary">Ajouter au panier <i class="icon-cart-1"></i></a>
      </div>
    </div>
  </div>
  <div class="taille" class="col-md-4 product"><img src="{{asset('Images/guide-taille.png')}}" alt="guide des tailles"  class="img-fluid" ></div>
@endsection