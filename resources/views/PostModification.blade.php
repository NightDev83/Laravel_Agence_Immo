@extends('base')
@section('title','Modification de bien')

@section('content')

<div class="container py-5">
    <a href="{{route('Gestion')}}" class="text-decoration-none">Retour page précédente</a>
    <h2 class="text-center">- Information de l'annonce -</h2>
    <p class="text-center py-2">Agent en charge du dossier : <span class="text-success text-uppercase">{{$post->agent}}</span> </p>
    <p class="text-center"><a class="text-danger text-decoration-none" href="{{route('gestion.supprimer', $post->id)}}">Supprimer l'annonce</a></p>

<img height="200"  src="data:image/jpeg;base64,{{ $post->photo }}" alt="Photo de l'annonce">

    <div class="col-md-12 col-12 w-75 mx-auto">
        
    <form method="post" class="my-custom-form" action="{{ route('gestion.modifier', $post->id) }}"enctype="multipart/form-data">
        @csrf

        <div class="mb-3 form-group">
            <label for="title" class="form-label">Titre :</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
        </div>

        <div class="form-floating">
            <p>Description :</p>
             <textarea class="form-control" name="description"  style="height: 150px; resize: none">{{$post->description}}</textarea>
        </div>

        <div class="mb-3 form-group">
            <label for="lieux" class="form-label">Lieux :</label>
            <input type="text" class="form-control" id="lieux" name="lieux" value="{{$post->lieux}}" >
        </div>

        <div class="mb-3 form-group">
            <label for="surface" class="form-label">Surface : (m2)</label>
            <input type="text" pattern="[0-9]+"   class="form-control" id="surface" name="surface" value="{{$post->surface}}">

            <label class="pt-3" for="Pieces">Nombres de pièces : </label>
            <input type="text" pattern="[0-9]"   class="form-control" id="pieces" name="pieces" value="{{$post->pieces}}">
        </div>

        <div class="mb-3 form-group">
            <label for="surfaceexterieur" class="form-label">Surface extérieur : (m2)</label>
            <input type="text" pattern="[0-9]*"   class="form-control" id="surfaceexterieur" name="surfaceexterieur" value="{{ $post->surface_exterieur }}">
            @error('surfaceexterieur')
            <p class="text-danger">Le champs es requis</p>
            @enderror
        </div>



        <div class="mb-3 form-group">
            <label for="prix" class="form-label">Prix :</label>
            <input type="text" pattern="[0-9]*"   class="form-control" id="prix" name="prix" value="{{$post->prix}}">
        </div>

        
        <div class="mb-3 form-group">
        <label for="photo" class="form-label">Photos :</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>

        <div class="row text-center">

                <div class="col-md-4">
                    <label for="energie" class="form-label py-3">Classe Energétique :</label>
                    <select name="energie" id="energie">
                        <option value="Non définie" {{ $post->energie == 'Non définie' ? 'selected' : '' }}>Non définie</option>
                        <option value="A" {{ $post->energie == 'A' ? 'selected' : '' }}>A</option>
                        <option value="B" {{ $post->energie == 'B' ? 'selected' : '' }}>B</option>
                        <option value="C" {{ $post->energie == 'C' ? 'selected' : '' }}>C</option>
                        <option value="D" {{ $post->energie == 'D' ? 'selected' : '' }}>D</option>
                        <option value="E" {{ $post->energie == 'E' ? 'selected' : '' }}>E</option>
                        <option value="F" {{ $post->energie == 'F' ? 'selected' : '' }}>F</option>
                        <option value="G" {{ $post->energie == 'G' ? 'selected' : '' }}>G</option>
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
                        <select name="typedebien" id="typedebien">
    <option value="Appartement" {{ $post->type_de_bien == 'Appartement' ? 'selected' : '' }}>Appartement</option>
    <option value="Maison" {{ $post->type_de_bien == 'Maison' ? 'selected' : '' }}>Maison</option>
    <option value="Immeuble" {{ $post->type_de_bien == 'Immeuble' ? 'selected' : '' }}>Immeuble</option>
    <option value="Parking" {{ $post->type_de_bien == 'Parking' ? 'selected' : '' }}>Parking</option>
    <option value="Garage" {{ $post->type_de_bien == 'Garage' ? 'selected' : '' }}>Garage</option>
</select>
                </div>
                <div class="col-md-4">
                    <label for="exterieur">Extérieur</label>
                    <select name="exterieur" id="exterieur">
    <option value="true" {{ $post->exterieur == 'true' ? 'selected' : '' }}>Oui</option>
    <option value="false" {{ $post->exterieur == 'false' ? 'selected' : '' }}>Non</option>
</select>
                </div>
                <div class="col-md-4">
                    <label for="typedevente">Type de vente</label>
                    <select name="typedevente" id="typedevente">
    <option value="Neuf" {{ $post->type_de_vente == 'Neuf' ? 'selected' : '' }}>Neuf</option>
    <option value="Ancien" {{ $post->type_de_vente == 'Ancien' ? 'selected' : '' }}>Ancien</option>
    <option value="Autres" {{ $post->type_de_vente == 'Autres' ? 'selected' : '' }}>Autres</option>
</select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary text-center mx-auto my-4">Validé les modification</button>
    </form>
</div>



</div>

@endsection