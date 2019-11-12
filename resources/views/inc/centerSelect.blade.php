<select class="custom-select"  id="cesi_center" class="form-control @error('cesi_center') is-invalid @enderror" name="cesi_center" value="{{ old('cesi_center') }}" required autocomplete="cesi_center" autofocus>  
        <option value="La Rochelle">La Rochelle</option>
        <option value="Aix-en-provence">Aix-en-provence</option>
        <option value="Angoulême">Angoulême</option>
        <option value="Arras">Arras</option>
        <option value="Bordeaux">Bordeaux</option>
        <option value="Brest">Brest</option>
        <option value="Caen">Caen</option>
        <option value="Châteauroux">Châteauroux</option>
        <option value="Dijon">Dijon</option>
        <option value="Grenoble">Grenoble</option>
        <option value="Le mans">Le mans</option>
        <option value="Lille">Lille</option>
        <option value="Lyon">Lyon</option>
        <option value="Momptelier">Momptelier</option>
        <option value="Nancy">Nancy</option>
        <option value="Nantes">Nantes</option>
        <option value="Nice">Nice</option>
        <option value="Orléans">Orléans</option>
        <option value="Paris-Nanterre">Paris-Nanterre</option>
        <option value="Pau">Pau</option>
        <option value="Reims">Reims</option>
        <option value="Rouen">Rouen</option>
        <option value="Saint-Nazaire">Saint-Nazaire</option>
        <option value="Strasbourg">Strasbourg</option>
        <option value="Toulouse">Toulouse</option>
    </select>

@error('cesi_center')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror