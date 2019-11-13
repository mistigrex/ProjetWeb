@extends('layouts.app')

@section('content')
<div class = cadre>
    <h1>Manifestations</h1>
    @if (count($manifestations) > 0)
        @foreach ($manifestations as $manifestation)
            <h3><a href="/manifestations/{{$manifestation->id}}">{{$manifestation->nom}}</a></h3>
            <h3>{{$manifestation->description}}</h3>
            <h3>{{$manifestation->image}}</h3>
            <h3>{{$manifestation->frequence}}</h3>
            <h3>{{$manifestation->date}}</h3>
            <h3>{{$manifestation->prix}}</h3>
            <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
            <button>like</button>
            <small>Créer à {{$manifestation->created_at}}</small>

        @endforeach
    @else
        <p>Pas d'activité d'organisées</p>
    @endif
</div>


@endsection
