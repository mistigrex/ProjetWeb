@extends('layouts.app')


@section('content')


<section class="cadre">

@include('dashboard')

@auth
@if(Auth::user()->Role_id == 3 )
<a href="/administrations/create" class="btn btn-success" style="margin: 10px 20px 10px 25%">Prévenir les administrateurs qu'un contenu est nuisible</a><a id="downloadAll" href="/download"class="btn btn-danger">Télécharger toutes les images du site</a>
@endif
@if(Auth::user()->Role_id == 2 || Auth::user()->Role_id == 3)

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-box clearfix">
                    <div class="table-responsive">
                        <span>Barre de Recherche</span><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Rechercher une personne" title="Ecrivez le nom d'une personne">
                        <table class="table user-list" id="myTable">
                            <thead>
                                <tr>
                                    <th ><span>Personne</span></th>
                                    <th><span>Date d'inscription</span></th>
                                    <th class="text-center"><span>Rôle</span></th>
                                    <th><span>Email</span></th>
                                    <th><span>Actions</span></th>
                                </tr>
                            </thead>
                            <tbody>
          
@if(count($administrations) > 0)
@foreach($administrations as $administration)

      <tr>
            <td>
                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                <a href="/administrations/{{$administration->id}} "class="user-link">{{$administration->firstname}} {{$administration->name}}</a>
            </td>
            <td>
                    {{$administration->created_at}}
            </td>
            <td class="text-center">
                <span class="label label-default">{{$administration->Role_id}}</span>
            </td>
            <td>
                <a href="#">{{$administration->email}}</a>
            </td>
            <td style="width: 20%;">
                    <a href="/administrations/{{$administration->id}}/edit" class="table-link">
                            <span class="fa-stack">
                                <i class="fa fa-square fa-stack-2x"></i>
                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                <a href="#" class="table-link danger">
                        <span class="fa-stack">
                        <div>
                                {!!Form::open(['action' => ['AdministrationsController@destroy', $administration->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                               {{Form::hidden('_method', 'DELETE')}}
                               {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                               {!!Form::close()!!}
                     </div>
                    </span>
                </a>
            </td>
        </tr>
  
  
@endforeach



                    </tbody>
                </table>
                <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>      
      
            </div>
        </div>
      </div>
    </div>
</div>

@else
<h1>Aucun Utilisateurs dans la base de données</h1>
@endif

   
@endif

@endauth

</section>
@endsection

