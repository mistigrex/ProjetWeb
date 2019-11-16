@extends('layouts.app')

@section('content')
<div class = cadre>
    <h1 style="text-decoration:underline">Événement(s) du mois :</h1>

    <div class="container">

@if (count($manifestations) > 0)
        @foreach ($manifestations as $manifestation)
        <div class="row justify-content-start">
            <div class="card w-50" style="margin-bottom:15px;">
                    <div class="card-body"  style="margin-left:0px;">
                      <h5 class="card-title">{{$manifestation->nom}}</h5>
                      <p class="card-text">Créer le {{$manifestation->created_at}}</p>
                      <a href="/manifestations/{{$manifestation->id}}" class="btn btn-primary">Plus d'info</a>
                    </div>
                  </div>
                </div>
        @endforeach
    @else
        <p>Pas d'activité d'organisées</p>
    @endif

    </div>
    
</div>
@endsection
