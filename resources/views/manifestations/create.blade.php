@extends('layouts.app')

@section('content')
<div class = cadre>
    <h1>Créer une manifestation</h1>
    {!! Form::open(['action' => 'ManifestationsController@store', 'method' => 'MANIFESTATION']) !!}
    <div class="form-group">
        {{Form::label('nom','Nom')}}
        {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'Nom'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
        {{Form::label('date','Date')}}
        {{Form::date('date', '', ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('recurent','Recurent')}}
        {{Form::select('recurent', [true => 'oui', false => 'non'], false)}}
    </div>
    <div class="form-group">
        {{Form::label('prix','Prix')}}
        {{Form::number('prix', '0', ['class' => 'form-control', 'placeholder' => 'Prix'])}}
    </div>
    {{ Form::submit('Bon Toutou', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
</div>


@endsection
