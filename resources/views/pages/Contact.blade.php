@extends('layouts.app')

@section('content')

<form id="contactForm"action="action_page.php">

        <label for="fname">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Votre nom de famille..">
    
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Votre prénom..">
    
        <label for="centre_cesi">Centre CESI</label>
        <select id="idCesi" name="Centre CESI">  
          <option value="1">La Rochelle</option>
          <option value="19">Aix-en-provence</option>
          <option value="14">Angoulême</option>
          <option value="5">Arras</option>
          <option value="2">Bordeaux</option>
          <option value="12">Brest</option>
          <option value="3">Caen</option>
          <option value="15">Châteauroux</option>
          <option value="16">Dijon</option>
          <option value="17">Grenoble</option>
          <option value="11">Le mans</option>
          <option value="4">Lille</option>
          <option value="25">Lyon</option>
          <option value="20">Momptelier</option>
          <option value="8">Nancy</option>
          <option value="24">Nantes</option>
          <option value="18">Nice</option>
          <option value="23">Orléans</option>
          <option value="10">Paris-Nanterre</option>
          <option value="22">Pau</option>
          <option value="7">Reims</option>
          <option value="6">Rouen</option>
          <option value="13">Saint-Nazaire</option>
          <option value="9">Strasbourg</option>
          <option value="21">Toulouse</option>
        </select>
    
        <label for="sujet">Sujet du message</label>
        <textarea id="sujet" name="sujet" placeholder="Ecrivez votre message ici.." style="height:200px"></textarea>
    
        <input type="Envoyer" value="Envoyer">
    
      </form>
      
@endsection