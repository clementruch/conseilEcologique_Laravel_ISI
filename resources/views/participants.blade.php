@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Participants Inscrits</h1>

    @if (session('success'))
        <div id="success-alert" class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                @auth
                    @if (Auth::user()->is_admin)
                        <th>Action</th>
                    @endif
                @endauth
            </tr>
        </thead>
        <tbody>
            @foreach ($participants as $participant)
                <tr>
                    <td>{{ $participant->name }}</td>
                    <td>{{ $participant->email }}</td>
                    @auth
                        @if (Auth::user()->is_admin)
                            <td>
                                @if (!$participant->is_admin)
                                    <form action="{{ route('participants.promote', $participant) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Promouvoir</button>
                                    </form>
                                @else
                                    <form action="{{ route('participants.demote', $participant) }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-warning">Rétrograder</button>
                                    </form>
                                @endif
                                <form action="{{ route('participants.destroy', $participant) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce participant ?')">Supprimer</button>
                                </form>
                            </td>
                        @endif
                    @endauth
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var successAlert = document.getElementById('success-alert');
        if (successAlert) {
            setTimeout(function () {
                successAlert.style.display = 'none';
            }, 5000);
        }
    });
</script>
@endsection
