@extends('layouts.app')

@section('content')

    <div class="mt-5">
        <h2 class="text-center">Bienvenue sur Conseils Écologiques</h2>
        <p class="text-center">Nous offrons une variété de cours et de ressources pour vous aider à adopter des pratiques écologiques dans votre quotidien.</p>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/imgCours.jpg') }}" class="card-img-top" alt="Cours" width="216" height="136">
                <div class="card-body">
                    <h5 class="card-title">Cours</h5>
                    <p class="card-text">Explorez notre sélection de cours sur l'écologie.</p>
                    <a href="/cours" class="btn btn-primary">Voir les cours</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/imgParticipants.jpg') }}" class="card-img-top" alt="Participants" width="216" height="136">
                <div class="card-body">
                    <h5 class="card-title">Participants</h5>
                    <p class="card-text">Découvrez la liste des participants</p>
                    <a href="/participants" class="btn btn-primary">Voir les participants</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('images/imgRessources.jpg') }}" class="card-img-top" alt="Ressources" width="216" height="136">
                <div class="card-body">
                    <h5 class="card-title">Ressources</h5>
                    <p class="card-text">Accédez à une variété de ressources pour approfondir vos connaissances.</p>
                    <a href="/ressources" class="btn btn-primary">Voir les ressources</a>
                </div>
            </div>
        </div>
    </div>
@endsection

