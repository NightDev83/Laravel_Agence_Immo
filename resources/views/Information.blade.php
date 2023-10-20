@extends('Base')
@section('title','Mes information')

@section('content')
<div class="container py-5">

    <h2 class="text-center">- Mes informations -</h2>
    <img class="py-2 px-2" height="90" src="data:image/jpeg;base64,{{ $user->photo }}" alt="Avatar de {{ $user->name }}">

    <div class="col-md-12 col-12 w-75 mx-auto">
    <form method="post" action="/information" class="my-custom-form" enctype="multipart/form-data">
        @csrf
    
        <div class="mb-3 form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" readonly >
            <p class="text-secondary">*Pour toute modification du mail voir l'administrateur</p>
        </div>

        <div class="mb-3 form-group">
            <label for="nom" class="form-label">Nom / prénom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{$user->name}}" >
            @error('nom')
            <p class="text-danger">*Nom trop court</p>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="tel" class="form-label">Téléphone</label>
            <input type="text" class="form-control" id="tel" name="tel" value="{{$user->tel}}" >
            @error('tel')
            <p class="text-danger">Ne correspond pas au standar</p>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
            @error('password')
            <p class="text-danger">Les mots de passe ne correspondent pas.</p>
            @enderror
        </div>

        <div class="mb-3 form-group">
            <label for="password_confirmation" class="form-label">Confirmation de  mot de passe</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="mb-3 form-group">
        <label for="avatar" class="form-label">Image de profil</label>

        <input type="file" class="form-control" id="avatar" name="avatar">
        <p class="text-secondary">*Formats autorisés : JPEG, PNG</p>
        @error('avatar')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>



</div>

@endsection