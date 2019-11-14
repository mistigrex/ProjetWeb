@extends('layouts.app')

@section('content')
<div class = "cadre">
    @auth
        @if (Auth::user()->Role_id == 0)
            <a href="/manifestations/create">
                <img src="https://i.skyrock.net/4864/63484864/pics/2558063637_small_1.jpg" alt="la description textuelle de ton image" />
            </a>
        @endif

    @endauth


    <!---if(Auth::user()-Role_id == 0){
    <a href="/manifestations/create"><input type="btn btn-primary" value="Créer une manifestation"></a>--->

</div>

@endsection
