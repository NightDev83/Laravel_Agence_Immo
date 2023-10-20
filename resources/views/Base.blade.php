<!DOCTYPE html>
<html lang="fr">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Agence Immobilière')</title>
</head>
<body class="bg-body-secondary-subtle d-flex flex-column min-vh-100">

<nav class="navbar navbar-expand-lg bg-dark-subtle">
    <div class="container-fluid">
        <a class="navbar-brand text-primary ps-3 px-2" href="#">ImmoVision</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-2">
                    <a class="nav-link active" aria-current="page" href="{{ route('Home') }}">Accueil</a>
                </li>
                @if(auth()->user())
                <li class="nav-item dropdown px-2">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu Agent-Immo
                    </a>
                    <ul class="dropdown-menu">
                        @if(request()->route()->getName() !== 'Gestion')
                        <li><a class="dropdown-item" href="{{ route('Gestion') }}">Gestion de biens</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endif
                        @if(request()->route()->getName() !== 'Information')
                        <li><a class="dropdown-item" href="{{ route('Information') }}">Mes informations</a></li>
                        <li><hr class="dropdown-divider"></li>
                        @endif
                        <li><a class="dropdown-item" href="{{ route('message') }}">Message</a></li>
                    </ul>
                </li>
                @endif
                @if(request()->route()->getName() !== 'Connexion')
                @if(auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('deconnexion') }}">Déconnexion</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Connexion') }}">Connexion</a>
                </li>
                @endif
                @endif
            </ul>

            @auth
            <div class="ms-auto">
                <span class="navbar-text px-3">Bonjour, <span class="text-success">{{ $user->name }}</span></span>
                <span class="navbar-text"><img height="40" src="data:image/jpeg;base64,{{ $user->photo }}" alt="Avatar de {{ $user->name }}"></span>
            </div>
            @endauth
        </div>
    </div>
</nav>


<div class="container flex-grow-1">

    @yield('content')

</div>


<footer class="w-auto mt-auto bg-body-tertiary px-5">
        <div class="row text-center">

            <div class="col-lg-4">
                <h2>Liens utiles</h2>
                <ul class="list-unstyled">
                    <li><a href="https://getbootstrap.com/docs/5.3/components/badge/">Bootstrap</a></li>
                    <li><a href="https://laravel.com">Laravel</a></li>
                    <li><a href="https://heroicons.com">Heroicons</a></li>
                    <li><a href="#">Portefolio</a></li>
                </ul>
            </div>

            <div class="col-lg-4">
                <h2>Copyright</h2>
                <p>&copy; Agence-Immo 2023. Tous droits réservés.</p>
            </div>

            <div class="col-lg-4">
                <h2>Localisation</h2>
                <p>Villes: Toulon - Bandol - sanary - saint-cyr - la ciotat <br>
                  six-four - la seyne sur mer - marseille - hyier - la valette -
                  la garde - le pradet - carquerane.  
              </p>
            </div>
        </div>
    </footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>