@extends('layouts.app')

@section('content')
<div class = cadre>
   <a href="/manifestations" class= "btn btn-default">retour</a>
        <h1>{{$manifestation->nom}}</h1>
        <div>
            {{$manifestation->description}}
            {{$manifestation->image}}
            {{$manifestation->frequence}}
            {{$manifestation->date}}
            {{$manifestation->prix}}
            <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
            <button>like</button>
        
        </div>
           
            
</div>


@endsection
