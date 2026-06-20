<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de recherche - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">
        Résultat pour : <strong>{{ $q }}</strong>
    </h2>

    @if($medecins->count() > 0)

        <div class="alert alert-success">
            {{ $medecins->count() }} médecin(s) trouvé(s).
        </div>

        <div class="row">

            @foreach($medecins as $medecin)

                <div class="col-md-4 mb-4">

                    <div class="card shadow h-100">

                        @if($medecin->image)

                            <img
                                src="{{ asset('storage/'.$medecin->image) }}"
                                class="card-img-top"
                                style="height:250px; object-fit:cover;"
                                alt="{{ $medecin->prenom }} {{ $medecin->nom }}"
                            >

                        @else

                            <img
                                src="https://via.placeholder.com/300x250?text=Medecin"
                                class="card-img-top"
                                style="height:250px; object-fit:cover;"
                                alt="Médecin"
                            >

                        @endif

                        <div class="card-body text-center">

                            <h4 class="text-uppercase">
                                {{ $medecin->prenom }}
                                {{ $medecin->nom }}
                            </h4>

                            <p class="mb-2">
                                <strong>Spécialité :</strong>
                                {{ $medecin->specialite }}
                            </p>

                            <p class="mb-0">
                                <strong>Âge :</strong>
                                {{ $medecin->age }} ans
                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    @else

        <div class="alert alert-warning text-center">
            Aucun médecin trouvé pour votre recherche.
        </div>

    @endif

    <div class="mt-4">
        <a href="{{ url('/') }}" class="btn btn-primary">
            Retour à l'accueil
        </a>
    </div>

</div>

</body>
</html>