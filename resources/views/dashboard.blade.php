<div class="card" style="padding : 20px">
            <h3 class="card-title">Dashboard de {{ Auth::user()->firstname }} {{ Auth::user()->name }}</h3>
        <div class="row">
          <div class="col-sm">
        <div class="profile-userpic">
            <img src="https://www.placecage.com/150/150" class="rounded float-right" class="img-fluid" class="img-thumbnail" alt="Responsive image" alt="Photo de profil">
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
