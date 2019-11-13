@extends('layouts.app')

@section('content')
<div class = cadre>
    <h1>Manifestations</h1>
    @if (count($manifestations) > 0)
        @foreach ($manifestations as $manifestation)
            <h3>{{$manifestation->nom}}</a></h3>
        @endforeach
    @else
        <p>Pas d'activité d'organisées</p>
    @endif
</div>


@endsection
