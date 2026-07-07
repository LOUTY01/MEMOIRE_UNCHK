@extends('layouts.admin')

@section('content')
<div class="table-container">
    <h5 class="fw-bold mb-4">Ajouter un nouveau médecin</h5>
    <form action="{{ route('admin.medecins.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6 mb-3">
            <label>Email (pour la connexion)</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Mot de passe temporaire</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="col-md-6 mb-3">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Spécialité</label>
            <input type="text" name="specialite" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Sexe</label>
            <select name="sexe" class="form-control" required>
                <option value="">-- Sélectionnez le sexe --</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label>Téléphone</label>
            <input type="text" name="telephone" class="form-control" placeholder="Téléphone" required>
        </div>
        <div class="col-md-6 mb-3">
            <label>Date de naissance</label>
            <input type="date" name="date_naissance" class="form-control" required>
        </div>

        <div class="col-md-12 mt-3">
            <button type="submit" class="btn btn-success">Enregistrer le médecin</button>
        </div>
    </div>
</form>
</div>
@endsection