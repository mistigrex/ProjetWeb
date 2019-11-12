@extends('layouts.app')
@section('content')
<div class = cadre>
    <h1>Manifestations</h1>
    <br>
    <h2>Créer une manifestation</h2>
    <form method="post" action="cible.php">
 
        <p>
            <p>Nom de la manifestation :</p>
            <input type="text" name="Nom" />

            <p>Description :</p>
            <textarea name="description" rows="4" cols="45">
            </textarea>
            <p>Fréquence :</p>
            <select name="fréquence">
                <option value="0">Ponctuelle</option>
                <option value="1">Récurente</option>
            </select>
            <input type="submit" value="Valider" />
        </p>
     
    </form>
</div>

    
@endsection