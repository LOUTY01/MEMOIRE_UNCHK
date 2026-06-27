<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mot de passe oublié</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="card p-4 mx-auto" style="max-width:500px;">

        <h3 class="text-center">Mot de passe oublié</h3>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <input type="email"
                   name="email"
                   class="form-control mb-3"
                   placeholder="Votre email"
                   required>

            <button class="btn btn-primary w-100">
                Envoyer le lien
            </button>
        </form>

    </div>

</div>

</body>
</html>