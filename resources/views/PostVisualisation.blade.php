@extends('Base')
@section('title','Annonce n° ')

@section('content')

@if(session('success'))
        <div class="alert alert-success my-4">
            {{ session('success') }}
        </div>
    @endif

<div class="container-xxl py-5 my-5 text-center  border bg-white">
    
<p class="text-start"><a class="text-decoration-none" href="{{route('Home')}}"> <- Retourner en arrière</a></p>
<img class="img-fluid" src="data:image/jpeg;base64,{{ $post->photo }}" alt="">

<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <h2 class="text-start py-3">{{$post->title}}</h2>
        <p class="text-start text-secondary">{{$post->lieux}} - {{$post->created_at}}</p>
        <?php $nombreFormate = number_format($post->prix, 0, ',', ' '); ?>
        <p class="text-start text-success">{{$nombreFormate}} €</p>
    </li>
    <li class="list-group-item">
        <h4 class="text-start">Information</h4>
        <div class="row">
            <div class="col-md-4">
            <p class="text-secondary"> Nombre de pièces : <span class=" text-black">{{$post->pieces}}</span> </p>
            <p class="text-secondary">Classe energie : <span class=" text-black">{{$post->energie}}</span></p>
            @if($post->exterieur)
            <p class="text-secondary">Exterieur : <span class=" text-black">Oui - {{$post->surface_exterieur}} m2</span></p>
            @else
            <p class="text-secondary">Exterieur : <span class=" text-black"> Non</span></p>
            @endif
            </div>
            <div class="col-md-4">
                <p class="text-secondary"> Surface habitable : <span class="text-black">{{$post->surface}} m2</span></p>
                <p class="text-secondary">Type de bien : <span class=" text-black">{{$post->type_de_bien}}</span></p>
                <p class="text-secondary"><span class="text-black">Ref n° {{$post->id}}</span></p>
            </div>
            <div class="col-md-4">
                @if($post->disponible)
                <p class="text-secondary">Annonce disponible : <span class="text-success text-black">Oui</span></p>
                @else
                <p class="text-secondary">Annonce disponible : <span class="text-danger text-danger">Non</span></p>
                @endif
                <p class="text-secondary">Type de vente : <span class=" text-black">{{$post->type_de_vente}}</span></p>
            </div>
        </div>
    </li>
    <li class="list-group-item">
        <h4 class="text-start">description</h4>
        <p class="py-3">{{$post->description}}</p>
    </li>
    <li class="list-group-item">
        <h4 class="text-start py-3">Agent en charge de l'annonce</h4>
        
        <div class="row">
            <div class="col-md-6">
                <img class="img-thumbnail" src="data:image/jpeg;base64,{{ $agent->photo}}" alt="">
                <h3 class="py-3">{{$agent->name}}</h3>
                <p>{{$agent->email}}</p>
                <p>{{$agent->tel}}</p>
                <p></p>
            </div>

            <div class="col-md-6">
                <h4>Intéréssé(e) ?</h4>
                @if($post->disponible)
                    <form method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom/prénom</label>
                            <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="tel" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control" id="tel" name="tel">
                        </div>
                        <div class="mb-3">
                            <label for="agent" class="form-label">Agent</label>
                            <input type="agent" class="form-control" id="agent" name="agent" value="{{$post->agent}}" readonly>
                            <p class="text-secondary">*Vérifier que le champs soit correct</p>
                        </div>
                        <div class="mb-3">
                            <label for="ref" class="form-label">Reférence de l'annonce</label>
                            <input type="ref" class="form-control" id="ref" name="ref" value="{{$post->id}}" readonly>
                            <p class="text-secondary">*Vérifier que le champs soit correct</p>
                        </div>
                        <button type="submit" class="btn btn-primary">Je souhaite être contacter</button>
                    </form>
                    @else
                    <h4 class="text-danger">Annonce indisponible</h4>
                    @endif
            </div>
        </div>
        </li>
        <li class="list-group-item py-3">
            <h4 class="text-start py-3">D'autres annonces</h4>
            <div class="row">
                @foreach($postaleatoir as $postaleatoire)
                @if($postaleatoire->id !== $post->id)
                <div class="col-md-4">  
                <div class="card" style="width: 18rem;">
                    <img src="data:image/jpeg;base64,{{ $postaleatoire->photo }}" class="card-img-top" alt="Post photo">
                    <div class="card-body">
                        <h5 class="card-title">{{$postaleatoire->title}}</h5>
                        <p class="card-text">{{$postaleatoire->lieux}}</p>
                        <p class="card-text">{{$postaleatoire->prix}} €</p>
                        <p class="card-text">{{$postaleatoire->surface}} m2</p>
                        <a href="{{route('gestion.view', $postaleatoire->id)}}" class="btn btn-primary">Voir l'annonce</a>
                    </div>
                    </div> 
                </div>
                @endif
                @endforeach
            </div>
        </li> 
    

</ul>
</div>



@endsection