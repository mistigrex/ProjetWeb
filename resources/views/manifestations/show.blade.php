@extends('layouts.app')


@section('content')
<div class = cadre>
    <h1 class = "titre1">{{$manifestation->nom}}</h1>
    <div>
        <p><b>Description :</b> {{$manifestation->description}}</p>
        <p><b>Date de l'évenement (début si renouvelable) : </b>{{$manifestation->date}}</p>
        <p><b>Prix d'inscription :</b> {{$manifestation->prix}}€</p>
        <p><b>Renouvellement :</b> {{$manifestation->recurent}}</p>
        <?php $test=$manifestation->image ?>
        <p><img class='image1' src="{{asset('storage/images/'.$test)}}" alt="pomme" ></p>
    </div>

    </div>
    <div class="cadre">
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
            {{ Form::submit('Commenter', ['class' => 'btn btn-dark'])}}
            {!! Form::close() !!}
        </div>

        <div>
            @foreach ($comments as $comment)
                @if ($manifestation->id == $comment->Activity_id)
                <div class = 'comment1'>
                    <p><b>Commentaire : </b>{{$comment->text}}</p>
                    <?php $photo=$comment->comment_image ?>
                    @if ($photo != null)
                        <p><img class='image2' src="{{asset('storage/comment_image/'.$photo)}}" alt="Erreur de chargement de la photo" ></p>
                    @endif

                    <small>Modifié par {{$comment->user_id}} pour la dernière fois le {{$comment->updated_at}}</small>

                </div>

                @endif
            @endforeach
        </div>

        <small>Créer le {{$manifestation->created_at}}</small>
        <br>
        <a href="/manifestations" class= "btn btn-primary">retour</a>
    </div>

@endsection
