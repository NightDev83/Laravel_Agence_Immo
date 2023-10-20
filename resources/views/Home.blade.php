@extends('Base')
@section('title', 'ImmoVision')

@section('content')

@if(session('success'))
        <div class="alert alert-success my-5">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="text-center my-5 py-4 text-secondary">ImmoVision <br> "Vous n'avez jamais été si prêt du but"</h1>

<div class="container-lg rounded py-2 text-center bg-dark-subtle">

    <h2 class=" py-3"> - L'Équipe Extraordinaire d'ImmoVision -</h2>

<div class="row">

<div class="col-12 col-lg-6">
    <img src="{{asset('image/equipe.jpg')}}" class="img-fluid rounded-5 py-4" alt="">
</div>

<div class="col-12 col-lg-6 pt-5">
    <p>
    Chez ImmoVision, notre équipe d'agents immobiliers représente l'essence même de l'excellence. Chaque membre incarne la passion pour le service client, l'expertise inégalée et l'engagement envers votre réussite immobilière.
    <br> </p>
Guidés par une vision partagée, nous sommes une équipe dévouée à créer des expériences exceptionnelles. Chacun de nous, avec son talent unique, contribue à faire de vos rêves immobiliers une réalité.
    <br><p>
Que vous envisagiez d'acheter, de vendre ou d'investir, ImmoVision vous offre bien plus qu'une agence immobilière ; nous sommes votre partenaire dans chaque étape du processus, toujours centrés sur la satisfaction client.
    <br></p><p>
Choisissez ImmoVision, où l'expertise rencontre la passion, pour une expérience immobilière inoubliable.
    </p>
</div>
</div>
</div>


<div class="container py-5 text-center">
    <h3 class="">- Nos prestations pour mieux vous accompagner - </h3>
    <div class="row p-1">
        <div class="col-12 col-lg-6 card">
            <div class="card-header">
                <h2 class="py-2">Vendeur</h2>
            </div>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">
                     <p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="" height="40">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                    </svg>
                    <span class="text-success">Nous évaluons les maisons.</span> 
                    </p>
                </li>

                <li class="list-group-item">
                    <p>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="40">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                    </svg>
                     <span class="text-success">Nous évaluons aussi les locaux commerciaux.</span>
                    </p>
                </li>
            
                <li class="list-group-item">

                         <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="40">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
                        </svg>
                        <span class="text-success">Nous nous occupons aussi de prendre toutes les photos et videos nécéssaires pour mettre en valeur vôtre bien.</span> 
                        </p>
                </li>

                <li class="list-group-item">
                        <p>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="40">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                        </svg>
                        <span class="text-success"> Une estimation précise et des honoraires d'agence raisonnables pour une expérience et une satisfaction innégalable.</span>
                                </p>
                </li>
        </div>

        <div class="col-12 col-lg-6 card">
    <div class="card-header">
        <h2 class="py-2">Acheteur</h2>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="40">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
                </svg>
                <span class="text-primary"> Des offres constantes et en quantité suffisantes.</span>
            </p>
        </li>
        <li class="list-group-item">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="40">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                </svg>
                <span class="text-primary">Des délais d'obtention de visite très courts. </span>
            </p>
        </li>
        <li class="list-group-item">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" height="40">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
                </svg>
                <span class="text-primary"> Aucun frais d'agence ni de dossier.</span>
            </p>
        </li>
        <li class="list-group-item">
            <p>
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"height="40">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-primary">Une assurance de longue durée même en cas de vices cachés, nous nous occupons de tout.</span>
             </p>
        </li>   
        </div>
    </div>
    
    <div class="row py-5">
        <h2 class="py-5">- Voici une sélection de bien -</h2>
    @foreach($post as $posts)
        <div class="col-xl-6  mb-4">
            <div class="card bg-body-tertiary">
                @if ($posts->photo)
                <img class="card-img-top" src="data:image/jpeg;base64,{{ $posts->photo }}" alt="Photo de l'annonce">
                @else
                <img src="{{ asset('image/equipe.jpg') }}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $posts->title }}</h5>
                    <p class="card-text">{{ $posts->description }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"> Surface: {{ $posts->surface }} m2</li>
                    <li class="list-group-item">Ville: {{ $posts->lieux }}</li>
                    @if($posts->disponible == true)
                        <li class="list-group-item text-success">Disponible</li>
                    @else
                        <li class="list-group-item text-danger">Indisponible</li>
                    @endif
                    <li class="list-group-item">{{ $posts->created_at }}</li>
                    <li class="list-group-item">Ref n°: {{ $posts->id }}</li>
                     <?php $nombreFormate = number_format($posts->prix, 0, ',', ' '); ?>
                    <li class="list-group-item ">Prix:  {{ $nombreFormate }} €</li>

                </ul>
                <div class="card-body">
                    <li class="list-group-item "><a class="text-decoration-none text-primary"  href="{{route('gestion.view', $posts->id)}}">Voir l'annonce</a></li>
                </div>
            </div>
        </div>
    @endforeach
    <p class="text-center">{{$post->links()}}</p>
</div>
</div>

@endsection