@extends('layouts.admin')

@section('content')
<div class="table-container">
    <h5 class="fw-bold mb-4">Liste des Patients</h5>
    <table class="table table-hover">
        <thead>
            <tr><th>Nom</th><th>Email</th><th>Date Inscription</th></tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{ $patient->nom }}</td>
                <td>{{ $patient->email }}</td>
                <td>{{ $patient->created_at->format('d/m/Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection