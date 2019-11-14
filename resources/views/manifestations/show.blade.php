@extends('layouts.app')

@section('content')
<div class = cadre>
   <!--<a href="/manifestations/{{$manifestation->id}}" class= "btn btn-default">retour</a>-->
        <h1>{{$manifestation->nom}}</h1>
        <div>
            {{$manifestation->description}} <br>
            {{$manifestation->image}}<br>
            {{$manifestation->frequence}}<br>
            {{$manifestation->date}}<br>
            {{$manifestation->prix}}<br>
            <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
            <button>envoyer commentaire</button>
            @if (count ({{$manisfestation->commentaire}}) > 0)
                {{$manifestation->commentaire}}<br>
            @else  
                <p>Page encore de commentaire, sois le premier à commenter</p>
            @endif
            <button><img class = 'like' src="{{asset('images/like.png')}}"alt="like"></button>
            <button>S'incrire à l'événement</button>
        // recup id utilisateur et id activité
        </div>
           
            
</div>
@endsection
