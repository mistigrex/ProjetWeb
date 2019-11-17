@extends('layouts.app')


@section('content')
<div class = cadre>
<div class="container"></div>

    <h1 class = "titre1">{{$manifestation->nom}}</h1>


    <div class="card">
        <div class="card-body">
          <h5 class="card-title"><b>Description :</b> {{$manifestation->description}}</h5>
          <p class="card-text"><b>Date de l'événement (début si renouvelable) : </b>{{$manifestation->date}}</p>
          <p class="card-text"><b>Prix d'inscription :</b> {{$manifestation->prix}}€</p>
          <p class="card-text"><b>Renouvellement :</b> {{$manifestation->recurent}}</p>
        </div>
        <?php $test=$manifestation->image ?>
        <p><img class='card-img-top' src="{{asset('storage/images/'.$test)}}" alt="Image de l'évenement" ></p>
      </div>
      <small>Créer le {{$manifestation->created_at}}</small>
      <div class="container">

    </div>
</div>
@auth
    <div class = 'cadre'>

          {!! Form::open(['action' => 'ParticipatesController@store', 'method' => 'MANIFESTATION', 'enctype' => 'multipart/form-data']) !!}
        {!! Form::token() !!}

        <?php $Activity_id = $manifestation->id ?>
        {!! Form::hidden('Activity_id', $Activity_id) !!}

        <?php $Participant_id = Auth::user()->id ?>
        {!! Form::hidden('Participant_id', $Participant_id) !!}

        <?php $Participant_firstname = Auth::user()->firstname ?>
        {!! Form::hidden('Participant_firstname', $Participant_firstname) !!}

        <?php $Participant_name = Auth::user()->name ?>
        {!! Form::hidden('Participant_name', $Participant_name) !!}

        <br>
        @if (Auth::user()->Role_id == 2)
            <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
        @endif

        <?php $inscription = 0?>

        @foreach ($participates as $participate)
        @if(Auth::user()->id == $participate->Participant_id )
            <?php $inscription = 1 ?>
        @endif
        @endforeach
        @if ($inscription == 1)
            <button class="btn btn-primary" disabled>Vous êtes inscrit</button>
        @else
            {{ Form::submit("M'inscrire", ['class' => 'btn btn-primary'])}}
        @endif

        {!! Form::close() !!}



    </div>
@endauth
    <div class="cadre">
        @auth
        @if (Auth::user()->Role_id == 2 || Auth::user()->Role_id == 1)


        <div>
            {!! Form::open(['action' => 'CommentsController@store', 'method' => 'MANIFESTATION', 'enctype' => 'multipart/form-data']) !!}
            {!! Form::token() !!}

            {!! Form::textarea('text', '', ['class' => 'form-control', 'placeholder' => 'Votre Commentaire', 'rows' => 2, 'cols' => 50]) !!}

            <?php $Activity_id = $manifestation->id ?>
            {!! Form::hidden('Activity_id', $Activity_id) !!}

            <?php $user_id = Auth::user()->id ?>
            {!! Form::hidden('user_id', $user_id) !!}

            <div class="form-group">
                {{Form::label('comment_image','Photo')}}
                {{Form::file('comment_image')}}
            </div>

            <br>


        </div>
        @if ($inscription == 1)
            {{ Form::submit('Commenter', ['class' => 'btn btn-dark'])}}
        @else
            <button class = "btn btn-dark" disabled> Vous devez être inscrit à cette activité pour commenter</button>
        @endif
        {!! Form::close() !!}
        @endif
        @endauth
        <div>
                @foreach ($comments as $comment)
                @if ($manifestation->id == $comment->Activity_id)

                <div class="card mb-3" style="max-width: 900px; margin-top:20px">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                                <?php $photo=$comment->comment_image ?>
                                @if ($photo != null)
                                    <a href="{{asset('storage/comment_image/'.$photo)}}" target="_blank"><img class="card-img" src="{{asset('storage/comment_image/'.$photo)}}"  title="Cliquez pour agrandir" alt="Erreur de chargement de la photo" ></a>
                                @endif
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Commentaire :</h5>
                              <p class="card-text">{{$comment->text}}</p>
                              <p class="card-text"><small class="text-muted">Derniere mise a jour le {{$comment->updated_at}}</small></p>
                              <p class="card-text"><small class="text-muted">Par {{$comment->user_id}}</small></p>
                            </div>
                          </div>
                        </div>
                      </div>

                @endif
                @endforeach
        </div>


        <br>
        <a href="/manifestations" class= "btn btn-primary">Retour</a>
    </div>

@endsection
