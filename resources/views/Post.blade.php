@extends('Base')
@section('title', 'Gestion de bien')

@section('content')

@if(session('success'))
        <div class="alert alert-success my-5">
            {{ session('success') }}
        </div>
    @endif

<div class="container-xxl py-5">
    <h2 class="text-center py-4">- Listes de toutes nos annonces -</h2>

<table class="table table-dark table-striped-columns">
<thead>
    <tr>
      <th scope="col">Ref n°</th>
      <th scope="col">Agent</th>
      <th scope="col">Titre</th>
      <th scope="col">Ville</th>
      <th scope="col">Prix</th>
      <th scope="col">Dispo</th>
      <th scope="col">Modification</th>

    </tr>
  </thead>
  <tbody>
    @foreach($post as $posts)
    <tr>
      <th scope="row">{{$posts->id}}</th>
      <td>{{$posts->agent}}</td>
      <td>{{$posts->title}}</td>
      <td>{{$posts->lieux}}</td>
      <?php $nombreFormate = number_format($posts->prix, 0, ',', ' '); ?>
      <td>{{$nombreFormate}} €</td>
      @if($posts->disponible)
      <td class="text-success">Dispo</td>
      @else
      <td class="text-danger">Non dispo</td>
      @endif
      @if($user->name == $posts->agent)
      <td class="text-center"><a class="text-decoration-none text-danger" href="{{ route('gestion.modifier', $posts) }}">Modifier</a>
      @else
      <td class="text-center">Non autorisé</td>
      @endif

    </tr>
    @endforeach
  </tbody>
</table>
<p class="text-center">{{$post->links()}}</p>
<p class="text-center text-dark"> <a class=" text-decoration-none" href="{{route('gestion.ajout')}}">Ajouter une annonce +</a> </p>

</div>

@endsection