<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réinitialiser mot de passe</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 mx-auto" style="max-width:500px;">

        <h3 class="text-center mb-4">Nouveau mot de passe</h3>

        {{-- ERREURS --}}
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            {{-- TOKEN --}}
            <input type="hidden" name="token" value="{{ $token }}">

            {{-- EMAIL --}}
            <div class="mb-3">
                <label>Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       required>
            </div>

            {{-- PASSWORD --}}
            <div class="mb-3">
                <label>Nouveau mot de passe</label>
                <input type="password"
                       name="password"
                       class="form-control"
                       required>
            </div>

            {{-- CONFIRM PASSWORD --}}
            <div class="mb-3">
                <label>Confirmer mot de passe</label>
                <input type="password"
                       name="password_confirmation"
                       class="form-control"
                       required>
            </div>

            <button class="btn btn-primary w-100">
                Modifier le mot de passe
            </button>

        </form>

    </div>

</div>

</body>
</html>