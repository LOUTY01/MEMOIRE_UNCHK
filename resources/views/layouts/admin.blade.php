<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin - Sama Santé</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .admin-layout { display: flex; min-height: 70vh; }
        .sidebar { width: 260px; background: #fff; border-right: 1px solid #eef2f7; padding: 20px; }
        .nav-link.active { background: #1c8adb; color: white !important; }
        footer { background: #0b5ed7; color: white; padding: 40px 0; margin-top: 50px; }
    </style>
</head>
<body>

    <!-- NAVBAR (Header) -->
    <nav class="navbar navbar-expand-lg bg-white shadow-sm mb-4">
        <div class="container d-flex">
            <a class="navbar-brand fw-bold" href="#">Sama Santé Admin</a>
            <form method="POST" action="{{ route('logout') }}" class="ms-auto">
                @csrf
                <button class="btn btn-outline-danger btn-sm">Déconnexion</button>
            </form>
        </div>
    </nav>

    <div class="container-fluid admin-layout">
        <!-- SIDEBAR -->
        <div class="sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('admin.medecins') }}" class="nav-link {{ request()->routeIs('admin.medecins') ? 'active' : '' }}">Gestion Médecins</a></li>
                <li class="nav-item"><a href="{{ route('admin.patients') }}" class="nav-link {{ request()->routeIs('admin.patients') ? 'active' : '' }}">Gestion Patients</a></li>
                <li class="nav-item"><a href="{{ route('admin.rendezvous') }}" class="nav-link {{ request()->routeIs('admin.rendezvous') ? 'active' : '' }}">Rendez-vous</a></li>
                <li class="nav-item"><a href="{{ route('admin.tickets') }}" class="nav-link {{ request()->routeIs('admin.tickets') ? 'active' : '' }}">Tickets</a></li>
            </ul>
        </div>

        <!-- CONTENU DYNAMIQUE (C'est ici que vos pages s'insèrent) -->
        <main class="flex-grow-1 p-4">
            @yield('content')
        </main>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2026 SamaSanté. Tous droits réservés.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>