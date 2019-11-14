@extends('layouts.app')

@section('content')
<div class = cadre>
    <h1>Manifestations</h1>
    @if (count($manifestations) > 0)
        @foreach ($manifestations as $manifestation)
            <h3><a href="/manifestations/{{$manifestation->id}}">{{$manifestation->nom}}</a></h3>
         
            <small>Créer à {{$manifestation->created_at}}</small>
        
        @endforeach
    @else
        <p>Pas d'activité d'organisées</p>
    @endif
  
</div>


@endsection
