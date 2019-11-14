{{-- @extends('layouts.app')

@section('content')
<section class="cadre"> --}}

    <div class="card">
            <h3 id="dash"class="card-title">Dashboard de {{ Auth::user()->firstname }} {{ Auth::user()->name }}</h3>
        <div class="row">
          <div class="col-sm">
        <div class="profile-userpic">
            <img src="https://www.placecage.com/140/140" class="rounded float-right" class="img-fluid" class="img-thumbnail" alt="Responsive image" alt="Photo de profil">
        </div>
          </div>
          <div class="col-sm">
        <div>
                <i class="fas fa-user-graduate"></i>
                <span>{{ Auth::user()->firstname }} {{ Auth::user()->name }}</span>
        </div>
          <div>
                <i class="far fa-envelope"></i>
                <span>{{ Auth::user()->email }} </span>
          </div>
          <div>      
                <i class="fas fa-school"></i>
                <span>{{ Auth::user()->Cesi_id }} </span></div>
          <div>
                <i class="far fa-clock"></i>
              <span>{{ Auth::user()->created_at }} </span>
              </div>
          </div>
        </div>
      </div>


</div>

@auth

@if(Auth::user()->Role_id == 0)

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                    <th><span>Utilisateur</span></th>
                                    <th><span>Creation</span></th>
                                    <th class="text-center"><span>Rôle</span></th>
                                    <th><span>Email</span></th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                              
@endif

@endauth
{{-- 
</section>
@endsection --}}
