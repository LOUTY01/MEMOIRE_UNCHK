<!DOCTYPE html>
<html>
<head>
    <title>Inscription - Sama Santé</title>
    <style>
        body {font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px;}
        input {width: 100%; padding: 10px; margin: 10px 0;}
        button {background: #2563eb; color: white; padding: 12px; border: none; width: 100%; cursor: pointer;}
    </style>
</head>
<body>
    <h1>Créez votre compte</h1>
    
    <form method="POST" action="/inscription">
        @csrf
        <input type="text" name="name" placeholder="Nom complet" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Mot de passe" required>
        <input type="password" name="password_confirmation" placeholder="Confirmer mot de passe" required>
        <button type="submit">S'inscrire</button>
    </form>
    
    <p>Déjà un compte ? <a href="/connexion">Connectez-vous ici</a></p>
</body>
</html>