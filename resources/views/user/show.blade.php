@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h1>Mon Profil</h1>
    <p><strong>Nom :</strong> {{ $user->name }}</p>
    <p><strong>Email :</strong> {{ $user->email }}</p>

    <form action="{{ route('user.logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-primary">Deconnexion</button>
    </form>

    <form action="{{ route('user.supprimerCompte') }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer votre compte ? Cette action est irréversible.')">Supprimer mon compte</button>
    </form>
</div>
@endsection
