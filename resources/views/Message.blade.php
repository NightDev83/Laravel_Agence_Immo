@extends('Base')
@section('title','Mes messages')

@section('content')
@if(session('success'))
        <div class="alert alert-success my-5">
            {{ session('success') }}
        </div>
    @endif

<div class="container my-5 py-5">
    <h1 class="text-center my-4">Vos messages</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Message n°</th>
                <th scope="col">Mail</th>
                <th scope="col">Name</th>
                <th scope="col">Tel</th>
                <th scope="col">Ref</th>
                <th scope="col">Actions</th> <!-- Nouvelle colonne pour les actions -->
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->mail }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->tel }}</td>
                    <td>{{ $message->ref }}</td>
                    <td>
                        <form action="{{ route('supprimer.message', $message->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>



@endsection