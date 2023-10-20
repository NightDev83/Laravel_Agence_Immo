@extends('Base')

@section('title', 'Ajout d\'article')



@section('content')
<div class="container py-5">
    <a href="{{route('Gestion')}}" class="text-decoration-none">Retour page précédente</a>
    <h2 class="text-center">- Ajouter une annonce -</h2>

    <div class="col-md-12 col-12 w-75 mx-auto">

    <form method="post" class="my-custom-form" action="/gestionpostajout" enctype="multipart/form-data">
        @csrf

        <div class="mb-3 form-group">
        <label for="title" class="form-label">Titre :</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        @error('title')
        <p class="text-danger">Le champ est requis</p>
        @enderror
    </div>

        <div class="form-floating">
            <p>Description :</p>
             <textarea class="form-control" name="description"  style="height: 150px; resize: none" >{{ old('description') }}</textarea>
             @error('description')
            <p class="text-danger">Le champs es requis</p>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="lieux" class="form-label">Lieux :</label>
            <input type="text" class="form-control" id="lieux" name="lieux" value="{{ old('lieux') }}">
            @error('lieux')
            <p class="text-danger">Le champs es requis</p>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="surface" class="form-label">Surface interieure : (m2)</label>
            <input type="text" pattern="[0-9]+"   class="form-control" id="surface" name="surface" value="{{ old('surface') }}">
            @error('surface')
            <p class="text-danger">Le champs es requis</p>
            @enderror

            <label class="pt-3" for="Pieces">Nombres de pièces : </label>
            <input type="text" pattern="[0-9]"   class="form-control" id="pieces" name="pieces" value="{{ old('pieces') }}">
            @error('pieces')
            <p class="text-danger">Le champs es requis</p>
            @enderror

            <div class="row text-center">
                <div class="col-md-4">
                        <label for="energie" class="form-label py-3">Classe Energétique :</label>
                        <select name="energie" id="energie">
                            <option value="Non définie">Non définie</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                        </select>
                </div>
                <div class="col-md-4">
                    
                     <label for="disponible" class="form-label py-3">Disponible :</label>
                        <select name="disponible" id="disponible">
                            <option value="true" {{ old('disponible') == 'true' ? 'selected' : '' }}>Oui</option>                                
                            <option value="false" {{ old('disponible') == 'false' ? 'selected' : '' }}>Non</option>
                        </select>
                </div>
                <div class="col-md-4">
                        <label class="form-label py-3" for="type de bien">Type de bien :</label>
                        <select name="typedebien" id="type de bien">
                            <option default value="Apartement">Appartement</option>
                            <option value="Maison">Maison</option>
                            <option value="Immeuble">Immeuble</option>
                            <option value="Parking">Parking</option>
                            <option value="Garage">Garage</option>
                        </select>
                </div>
                <div class="col-md-4">
                    <label for="exterieur">Extérieur</label>
                    <select name="exterieur" id="exterieur">
                        <option value="true">Oui</option>
                        <option value="false">Non</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="typedevente">Type de vente</label>
                    <select name="typedevente" id="typedevente">
                        <option value="Neuf">Neuf</option>
                        <option value="Ancien">Ancien</option>
                        <option value="Autres">Autres</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="mb-3 form-group">
            <label for="surfaceexterieur" class="form-label">Surface extérieure : (m2)</label>
            <input type="text" pattern="[0-9]*"   class="form-control" id="surfaceexterieur" name="surfaceexterieur" value="{{ old('surface exterieur') }}">
            @error('surface exterieur')
            <p class="text-danger">Le champs es requis</p>
            @enderror
        </div>
        

        <div class="mb-3 form-group">
            <label for="prix" class="form-label">Prix :</label>
            <input type="text" pattern="[0-9]*"   class="form-control" id="prix" name="prix" value="{{ old('prix') }}">
            @error('prix')
            <p class="text-danger">Le champs es requis</p>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="agent" class="form-label">Agent :</label>
            <input type="text"   class="form-control" id="prix" name="agent" value="{{$user->name}}" readonly >
        </div>

        
        <div class="container">
        <label for="photo" class="form-label">Photos :</label>
        <input type="file" class="form-control" id="photo" name="photo">
        <p class="text-secondary">*Formats autorisés : JPEG, PNG</p>
        @error('photo')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>

        </div>

        <button type="submit" class="btn btn-primary text-center mx-auto">Valider les modifications</button>
    </form>
</div>



</div>
@endsection