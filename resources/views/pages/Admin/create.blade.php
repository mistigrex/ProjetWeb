@extends('layouts.app')

@section('content')

<div class="cadre "class="container">

<h1>Envoyer un mail aux administrateurs</h1>

<h3 style="color:orange;text-decoration: underline;">Liste des événements :</h3>
<div class="list-group">
@if(count($manifestations) > 0)
@foreach($manifestations as $manifestation)
    <a href="/manifestations/{{$manifestation->id}}" class="list-group-item list-group-item-action">{{$manifestation->nom}}</a>
@endforeach
  </div>
  <hr>
@else
<h3>Aucun évènement</h1>
@endif
    
{!! Form::open(['action' => 'MailsController@alertemail', 'method' => 'POST']) !!}
    
<div class="form-group">
    {{Form::label('title', 'Sujet du mail')}}
    {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Sujet du mail'])}}
</div>

<div class="form-group">
    {{Form::label('content', 'Contenu du mail')}}
    {{Form::textarea('content', '', ['class' => 'form-control', 'placeholder' => 'Contenu du mail'])}}
</div>

{{Form::submit('Envoyer le mail', ['class' => 'btn btn-warning'])}}


{!! Form::close() !!}


</div>



@endsection