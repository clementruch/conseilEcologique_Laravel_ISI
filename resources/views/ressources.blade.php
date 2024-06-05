@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ressources Disponibles</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>URL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ressources as $ressource)
                    <tr>
                        <td>{{ $ressource->titre }}</td>
                        <td>{{ $ressource->description }}</td>
                        <td><a href="{{ $ressource->url }}" target="_blank">{{ $ressource->url }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
