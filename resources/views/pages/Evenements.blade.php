@extends('layouts.app')

@section('content')
<div class = "cadre">
    @auth
    if(Auth::user()-role_id == 0)
    <a href="/manifestations/create"><input type="button" value="Ta mère"></a>
    @endauth
</div>

@endsection
