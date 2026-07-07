@extends('layouts.admin')

@section('content')
<div class="table-container">
    <div class="d-flex justify-content-between mb-4">
        <h5 class="fw-bold">Liste des Médecins</h5>
        <a href="{{ route('admin.medecins.create') }}" class="btn btn-primary">
            <i class="bi bi-plus"></i> Ajouter Médecin
        </a>
    </div>

    <form method="GET" action="{{ route('admin.medecins') }}" class="row mb-3">
        <div class="col-md-4">
            <input type="text" name="email" class="form-control" placeholder="Rechercher par email...">
        </div>
        <div class="col-md-4">
            <select name="specialite" class="form-select">
                <option value="">Toutes spécialités</option>
                <option value="Cardiologie">Cardiologie</option>
                <option value="Generaliste">Généraliste</option>
            </select>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-secondary">Filtrer</button>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Spécialité</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medecins as $m)
            <tr>
                <td>{{ $m->nom }} {{ $m->prenom }}</td>
                <td>{{ $m->user_email ?? 'Non lié' }}</td>
                <td>{{ $m->specialite }}</td>
                <td>
                    <a href="#" class="btn btn-sm btn-warning">Modifier</a>
                    <form action="#" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection