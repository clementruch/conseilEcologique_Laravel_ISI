@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Informations sur les Cours</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom du Cours</th>
                    <th>Durée</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cours as $cour)
                    <tr>
                        <td>{{ $cour->nom }}</td>
                        <td>{{ $cour->duree }} heures</td>
                        <td>{{ $cour->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
