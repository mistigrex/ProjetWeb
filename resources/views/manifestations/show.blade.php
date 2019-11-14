@extends('layouts.app')

@section('content')
<div class = cadre>
   <a href="/manifestations/{{$manifestation->id}}" class= "btn btn-default">retour</a>
        <h1>{{$manifestation->nom}}</h1>
        <div>
            {{$manifestation->description}} <br>
            <img src="{{$manifestation->image}}" alt="">
            {{$manifestation->frequence}}<br>
            {{$manifestation->date}}<br>
            {{$manifestation->prix}}<br>
            <input type="text"><textarea name="comment" id="" cols="30" rows="10"></textarea>
            <input envoyer commentaire>
            
            <button><img class = 'like' src="{{asset('images/like.png')}}"alt="like"></button>
            <button>S'incrire à l'événement</button>

        // recup id utilisateur et id activité
        </div>
           
            
</div>
@endsection
 