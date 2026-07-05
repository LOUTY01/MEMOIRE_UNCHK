<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Rendez-vous - Sama Santé</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        :root {
            --primary-blue: #007bff;
            --light-blue: #e9f2ff;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to bottom, rgba(146,214,255,0.1), rgba(255,255,255,0.1));
            min-height: 100vh;
        }

        /* HEADER */
        header {
            height: 70px;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 25px;
            border-radius: 15px;
            margin: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .logo { display: flex; align-items: center; gap: 10px; }
        .logo i { color: #1688e8; font-size: 22px; }
        .logo h2 { color: #1688e8; font-size: 22px; margin: 0; }

        /* CONTENT */
        .card-custom { 
            background: white; 
            padding: 40px; 
            border-radius: 20px; 
            border: none; 
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }

        .form-control {
            background-color: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 10px;
            padding: 0.75rem 1rem;
        }

        .btn-primary { background: #1688e8; border: none; padding: 10px 25px; border-radius: 50px; }
        
        .footer-text { margin-top: 50px; text-align: center; color: #6c757d; font-size: 0.9rem; }
    </style>
</head>

<body>

    <header>
        <div class="logo">
            <i class="bi bi-heart-pulse-fill"></i>
            <h2>Sama Santé</h2>
        </div>
        <div>
            <a href="{{ route('administrateur.dashboard') }}" class="text-decoration-none text-muted">
                <i class="bi bi-arrow-left"></i> Retour au Dashboard
            </a>
        </div>
    </header>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card-custom">
                    <h3 class="fw-bold mb-4 text-primary">Modifier le rendez-vous #{{ $rendezvous->id }}</h3>

                    @if(session('success'))
                        <div class="alert alert-success rounded-3">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('appointments.update', $rendezvous->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold text-muted small">Service</label>
                                <select name="service" class="form-control">
                                    <option value="consultation_generale" {{ $rendezvous->service == 'consultation_generale' ? 'selected' : '' }}>Consultation générale</option>
                                    <option value="cardiologie" {{ $rendezvous->service == 'cardiologie' ? 'selected' : '' }}>Cardiologie</option>
                                    <option value="pediatrie" {{ $rendezvous->service == 'pediatrie' ? 'selected' : '' }}>Pédiatrie</option>
                                    <option value="gynecologie" {{ $rendezvous->service == 'gynecologie' ? 'selected' : '' }}>Gynécologie</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="fw-bold text-muted small">Médecin</label>
                                <select name="medecin_id" class="form-control">
                                    @foreach($medecins as $medecin)
                                        <option value="{{ $medecin->id }}" {{ $rendezvous->medecin_id == $medecin->id ? 'selected' : '' }}>Dr. {{ $medecin->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold text-muted small">Date</label>
                                <input type="date" name="date" class="form-control" value="{{ $rendezvous->date }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="fw-bold text-muted small">Heure</label>
                                <input type="time" name="heure" class="form-control" value="{{ $rendezvous->heure }}">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="fw-bold text-muted small">Statut</label>
                            <select name="status" class="form-control">
                                <option value="en_attente" {{ $rendezvous->status == 'en_attente' ? 'selected' : '' }}>En attente</option>
                                <option value="payé" {{ $rendezvous->status == 'payé' ? 'selected' : '' }}>Payé</option>
                                <option value="echoue" {{ $rendezvous->status == 'echoue' ? 'selected' : '' }}>Échoué</option>
                            </select>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="bi bi-check-circle me-1"></i> Enregistrer les modifications
                            </button>
                            <a href="{{ route('administrateur.dashboard') }}" class="btn btn-outline-secondary px-4 rounded-pill">Annuler</a>
                        </div>
                    </form>
                </div>
                
                <div class="footer-text">
                    &copy; {{ date('Y') }} Sama Santé - Administration
                </div>
            </div>
        </div>
    </div>

</body>
</html>