@extends('layouts.app')

@section('content')
<div class = "cadre">
    @auth
        @if (Auth::user()->Role_id == 0)
            <a href="/manifestations/create">
                <button class ='styleButton1' type="button">Créer une manifestation</button>
            </a>
        @endif

    @endauth


    <!---if(Auth::user()-Role_id == 0){
    <a href="/manifestations/create"><input type="btn btn-primary" value="Créer une manifestation"></a>--->

</div>

@endsection
