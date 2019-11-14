@extends('layouts.app')

@section('content')
<div class = cadre>
    <h1 class = "titre1">{{$manifestation->nom}}</h1>
    <div>
        <p><b>Description :</b> {{$manifestation->description}}</p>
        <p><b>Date de l'évenement (début si renouvelable) : </b>{{$manifestation->date}}</p>
        <p><b>Prix d'inscription :</b> {{$manifestation->prix}}€</p>
        <p><b>Renouvellement :</b> {{$manifestation->recurent}}</p>
        <p> <?php $test=$manifestation->image ?>
        <p><img class='image1' src="{{asset('storage/images/'.$test)}}" alt="pomme" ></p>
    </div>
    <small>Créer le {{$manifestation->created_at}}</small>
    <br>
    <a href="/manifestations" class= "btn btn-primary">retour</a>

    </div>
    <div class="cadre">
            {!! Form::open(['action' => 'CommentsController@store', 'method' => 'MANIFESTATION', 'enctype' => 'multipart/form-data']) !!}
            {!! Form::token() !!}

            {!! Form::textarea('text', '', ['class' => 'form-control', 'placeholder' => 'Votre Commentaire']) !!}

            <?php $Activity_id = $manifestation->id ?>
            {!! Form::hidden('Activity_id', $Activity_id) !!}

            <?php $Author_id = $administration->id ?>
            {!! Form::hidden('Author_id', $Author_id) !!}
            <br>
            {{ Form::submit('Commenter', ['class' => 'btn btn-dark'])}}
            {!! Form::close() !!}
    </div>

@endsection
