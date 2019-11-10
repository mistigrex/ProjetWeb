@extends('layouts/app')

@section('content')
<div class="cadre">
    <form action="/inscription" method = "post">
    <input type="email" name = "email" placeholder = "Email">
    <input type="prenom" name = "prenom" placeholder = "Prenom">
    <input type="nom" name = "nom" placeholder = "Nom">
    <input type="campus" name = "campus" placeholder = "Campus">
    <input type="submit" value= "M'inscrire" >
    
    </form>
</div>
@endsection