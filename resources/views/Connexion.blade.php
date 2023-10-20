@extends('Base')
@section('title', 'Connexion')

@section('content')

<h2 class="text-center mt-5 ">- Connection -</h2>


<div class="container-md mt-5 sw-75">

<form method="post" action="/connexion">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required value="{{old('email')}}">
    @error('email')
    <p class="text-danger">Identifiant ou mot de passe incorrect</p>
    @enderror
    <div id="emailHelp" class="form-text">Ne partagez jamais votre identifiant</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label class="form-check-label" for="exampleCheck1">Rester connecter</label>
  </div>
  <button type="submit" class="btn btn-primary">Se connecter</button>
</form>

</div>

@endsection