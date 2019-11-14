@extends('layouts.app')

@section('content')
<div class = cadre>
   <a href="/manifestations/{{$manifestation->id}}" class= "btn btn-default">retour</a>
        <h1>{{$manifestation->nom}}</h1>
        <div>
            {{$manifestation->description}} <br>
            {{$manifestation->image}}<br>
            {{$manifestation->frequence}}<br>
            {{$manifestation->date}}<br>
            {{$manifestation->prix}}<br>
            <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
            <button><img class = 'like' src="{{asset('images/like.png')}}"alt="like"></button>
        // recup id utilisateur et id activité
        </div>
           
            
</div>
@endsection
