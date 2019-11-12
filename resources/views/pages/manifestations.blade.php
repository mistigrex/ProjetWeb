@extends('layouts.app')
@section('content')
<div class = cadre>
    <h1>Manifestations</h1>
    <br>
    <h2>Créer une manifestation</h2>
    <form method="post" action="cible.php">

        <p>
            <label for="nom">Nom de la manifestation</label>
            <input type="text" name="nom" />

            <label for="description">Description</label>
            <textarea name="description" rows="4" cols="45">
            </textarea>

            <label for="frequence">Fréquence de la manifestation</label>
            <select name="fréquence">
                <option value="0">Ponctuelle</option>
                <option value="1">Récurente</option>
            </select>

            <label for="image">Image</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
            <input type="file" name="image">


            <input type="submit" value="Valider" />
        </p>

    </form>
</div>


@endsection
