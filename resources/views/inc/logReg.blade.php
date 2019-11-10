
<form>
    <div class="modal fade" id="modalLRForm" tabindex="1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
    
            <!--Content-->
            <div class="modal-content">
        
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
        
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" id="CI" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
                    Connexion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
                    Inscription</a>
                </li>
                </ul>
        
                <!-- Tab panels -->
                <div class="tab-content">
                <!--Panel 7-->
                <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
        
                    <!--Body-->
                    <div class="modal-body mb-1">
                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="email" id="modalLRInput" placeholder="Votre Adresse Mail"class="form-control form-control-sm validate" required>

                    </div>
        
                    <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="modalLRInput" placeholder="Votre mot de passe"class="form-control form-control-sm validate" required>

                    </div>
                    <div class="text-center mt-2">
                        <button class="btn btn-warning" type="submit" >Connexion<i class="fas fa-sign-in ml-1"></i></button>
                    </div>
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                    <div class="options text-center text-md-right mt-1">
                        <p id="textModal">Pas encore inscris ? <a href="#panel8" data-toggle="tab" class="blue-text">Inscription</a></p>
                        
                    </div>
                    <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                    </div>
        
                </div>
                <!--/.Panel 7-->
        
                <!--Panel 8-->
                <div class="tab-pane fade" id="panel8" role="tabpanel">
        
                    <!--Body-->
                    <div class="modal-body">

                            <i class="fas fa-school"></i>
                            <label for="centre_cesi">Centre CESI</label>
                           @include('inc.centerSelect')
                    
                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="email" id="modalLRInput"placeholder="Adresse Mail" class="form-control form-control-sm validate" required>
                    </div>
                    <i class="fas fa-user-graduate"></i>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                            <input type="text" name="first_name" id="modalLRInput"class="form-control input-sm" placeholder="Nom" required>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                            <input type="text" name="last_name" id="modalLRInput" class="form-control input-sm" placeholder="Prénom" required>
                            </div>
                        </div>
                        </div>

                    <div class="md-form form-sm mb-5">
                        <i class="fas fa-lock prefix"></i>
                        <input type="" id="modalLRInput" placeholder="Mot de passe" class="form-control form-control-sm validate" required>
                        </div>
        
                    <div class="md-form form-sm mb-4">
                        <i class="fas fa-lock prefix"></i>
                        <input type="password" id="modalLRInput" placeholder="Confirmer le mot de passe" class="form-control" id="validationCustom01" required>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">J'accepte les conditions d'utilisation</label>
                        </div>
                    <div class="text-center form-sm mt-2">
                        <button class="btn btn-warning" type="submit">Inscription <i class="fas fa-sign-in"></i></button>
                    </div>
        
                    </div>
                    <!--Footer-->
                    <div class="modal-footer">
                    <div class="options text-left">
                        <p  id="textModal">Vous avez déjà un compte ? <a data-toggle="tab" href="#panel7" class="blue-text">Se connecter</a></p>
                    </div>
                    <button type="button" class="btn btn-outline-danger waves-effect ml-auto" data-dismiss="modal">Fermer</button>
                    </div>
                </div>
                <!--/.Panel 8-->
                </div>
        
            </div>
            </div>
            <!--/.Content-->
        </div>
        </div>
        <!--Modal: Login / Register Form-->
    </form>