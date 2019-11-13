@extends('layouts.app')

@section('content')
<section id="Cadre">



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                 <span id="SuccessConnect">Connexion réussi !</span>

                 <div class="row" class="Dash">
                    <div class="col-sm-4">
                        <div class="profile-userpic">
                                <img src="https://www.placecage.com/140/140" class="img-responsive" alt="">
                            </div>
                 </div>
                 <div class="col-sm-4" class="profilDash">
                        <div class="row">
                                <i class="fas fa-user-graduate"></i>
                                <span>{{ Auth::user()->firstname }} {{ Auth::user()->name }}</span>
                        </div>
                        <div class="row">
                                <i class="far fa-envelope"></i>
                                <span>{{ Auth::user()->email }} </span>
                        </div>
                        <div class="row">
                                <i class="fas fa-school"></i>
                                <span>{{ Auth::user()->Cesi_id }} </span>
                        </div>
                        <div class="row">
                                <i class="fas fa-calendar-day"></i>
                                <span>{{ Auth::user()->created_at }} </span>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
</div></section>
@endsection
