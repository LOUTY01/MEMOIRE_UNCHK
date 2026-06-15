@extends('layouts.app')

@section('title', 'Contact - MédiCare')

@push('styles')
<style>
    /* ============================================================
       PAGE CONTACT — STYLES COMPLETS
    ============================================================ */

    /* ---- HERO ---- */
    .hero-contact {
        background: linear-gradient(120deg, var(--bleu-fonce) 0%, var(--bleu-principal) 100%);
        padding: 80px 0 0;
        overflow: hidden;
        position: relative;
    }

    .hero-contact::before {
        content: '';
        position: absolute;
        top: -60px; right: -60px;
        width: 320px; height: 320px;
        border-radius: 50%;
        background: rgba(255,255,255,0.06);
        pointer-events: none;
    }

    .hero-contact .hero-titre {
        font-size: clamp(1.8rem, 4vw, 2.6rem);
        font-weight: 800;
        color: var(--blanc);
        line-height: 1.25;
        margin-bottom: 16px;
    }

    .hero-contact .hero-sous-titre {
        color: rgba(255,255,255,0.80);
        font-size: 1rem;
        line-height: 1.7;
        max-width: 420px;
        margin-bottom: 28px;
    }

    .btn-hero-rdv {
        background: var(--blanc);
        color: var(--bleu-principal);
        font-weight: 700;
        border-radius: 30px;
        padding: 13px 32px;
        font-size: 0.95rem;
        text-decoration: none;
        display: inline-block;
        transition: transform 0.2s, box-shadow 0.2s;
        box-shadow: 0 4px 18px rgba(0,0,0,0.15);
    }

    .btn-hero-rdv:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(0,0,0,0.20);
        color: var(--bleu-fonce);
    }

    .hero-image {
        width: 100%;
        max-height: 380px;
        object-fit: cover;
        object-position: top;
        border-radius: 12px 12px 0 0;
        display: block;
    }

    /* ---- STATS RAPIDES ---- */
    .stats-bande {
        background: var(--blanc);
        box-shadow: 0 4px 24px rgba(26,115,232,0.10);
        border-radius: 16px;
        padding: 28px 32px;
        margin-top: -40px;
        position: relative;
        z-index: 10;
    }

    .stat-item {
        text-align: center;
        padding: 10px 16px;
    }

    .stat-item .icone-stat {
        width: 48px; height: 48px;
        border-radius: 12px;
        background: var(--bleu-clair);
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 10px;
        font-size: 1.2rem;
        color: var(--bleu-principal);
    }

    .stat-item .chiffre {
        font-family: 'Poppins', sans-serif;
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--texte-sombre);
        line-height: 1;
    }

    .stat-item .libelle {
        font-size: 0.78rem;
        color: var(--texte-gris);
        margin-top: 4px;
    }

    .stat-separateur {
        width: 1px;
        background: var(--bordure);
        align-self: stretch;
        margin: 8px 0;
    }

    /* ---- SECTION FORMULAIRE + CARTE ---- */
    .section-formulaire {
        padding: 70px 0;
        background: var(--gris-fond);
    }

    .titre-section {
        font-size: 1.65rem;
        font-weight: 800;
        color: var(--texte-sombre);
        margin-bottom: 8px;
    }

    .sous-titre-section {
        color: var(--texte-gris);
        font-size: 0.93rem;
        margin-bottom: 32px;
    }

    .carte-formulaire {
        background: var(--blanc);
        border-radius: 20px;
        padding: 36px 32px;
        box-shadow: 0 4px 24px rgba(26,115,232,0.08);
    }

    .form-label {
        font-weight: 600;
        font-size: 0.875rem;
        color: var(--texte-sombre);
        margin-bottom: 6px;
    }

    .form-control {
        border: 1.5px solid var(--bordure);
        border-radius: 10px;
        padding: 11px 16px;
        font-size: 0.9rem;
        color: var(--texte-sombre);
        transition: border-color 0.2s, box-shadow 0.2s;
    }

    .form-control:focus {
        border-color: var(--bleu-principal);
        box-shadow: 0 0 0 3px rgba(26,115,232,0.12);
        outline: none;
    }

    .form-control::placeholder {
        color: #B0BAD0;
    }

    textarea.form-control {
        resize: vertical;
        min-height: 120px;
    }

    .btn-envoyer {
        background: var(--bleu-principal);
        color: var(--blanc);
        border: none;
        border-radius: 30px;
        padding: 13px 36px;
        font-weight: 700;
        font-size: 0.95rem;
        cursor: pointer;
        transition: background 0.2s, transform 0.2s;
        width: 100%;
        margin-top: 8px;
    }

    .btn-envoyer:hover {
        background: var(--bleu-fonce);
        transform: translateY(-1px);
    }

    /* Carte Google Maps */
    .carte-localisation {
        border-radius: 20px;
        overflow: hidden;
        height: 300px;
        box-shadow: 0 4px 24px rgba(26,115,232,0.10);
        margin-bottom: 20px;
    }

    .carte-localisation iframe {
        width: 100%;
        height: 100%;
        border: none;
    }

    .info-adresse {
        background: var(--blanc);
        border-radius: 14px;
        padding: 20px 22px;
        box-shadow: 0 4px 16px rgba(26,115,232,0.07);
    }

    .info-adresse .ligne-info {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 14px;
    }

    .info-adresse .ligne-info:last-child {
        margin-bottom: 0;
    }

    .info-adresse .icone-info {
        width: 36px; height: 36px;
        background: var(--bleu-clair);
        border-radius: 9px;
        display: flex; align-items: center; justify-content: center;
        color: var(--bleu-principal);
        font-size: 0.85rem;
        flex-shrink: 0;
    }

    .info-adresse .texte-info strong {
        display: block;
        font-size: 0.82rem;
        color: var(--texte-gris);
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.4px;
        margin-bottom: 2px;
    }

    .info-adresse .texte-info span {
        font-size: 0.9rem;
        color: var(--texte-sombre);
        font-weight: 500;
    }

    .btn-itineraire {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background: var(--bleu-clair);
        color: var(--bleu-principal);
        font-weight: 700;
        font-size: 0.88rem;
        border-radius: 10px;
        padding: 10px;
        text-decoration: none;
        margin-top: 16px;
        transition: background 0.2s;
    }

    .btn-itineraire:hover {
        background: #d0e3fc;
        color: var(--bleu-fonce);
    }

    /* ---- SECTION SERVICES ---- */
    .section-services {
        padding: 70px 0;
        background: var(--blanc);
    }

    .badge-section {
        display: inline-block;
        background: var(--bleu-clair);
        color: var(--bleu-principal);
        font-size: 0.78rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.8px;
        border-radius: 20px;
        padding: 5px 14px;
        margin-bottom: 12px;
    }

    .carte-service {
        background: var(--gris-fond);
        border-radius: 16px;
        padding: 28px 24px;
        text-align: center;
        transition: transform 0.2s, box-shadow 0.2s;
        height: 100%;
        border: 1.5px solid transparent;
    }

    .carte-service:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 32px rgba(26,115,232,0.12);
        border-color: var(--bleu-principal);
        background: var(--blanc);
    }

    .icone-service {
        width: 60px; height: 60px;
        background: var(--bleu-clair);
        border-radius: 16px;
        display: flex; align-items: center; justify-content: center;
        margin: 0 auto 16px;
        font-size: 1.4rem;
        color: var(--bleu-principal);
    }

    .carte-service h5 {
        font-weight: 700;
        font-size: 0.95rem;
        margin-bottom: 8px;
        color: var(--texte-sombre);
    }

    .carte-service p {
        font-size: 0.84rem;
        color: var(--texte-gris);
        line-height: 1.6;
        margin: 0;
    }

    /* ---- SECTION FAQ ---- */
    .section-faq {
        padding: 70px 0;
        background: var(--gris-fond);
    }

    .accordion-item {
        border: none;
        border-radius: 14px !important;
        margin-bottom: 12px;
        overflow: hidden;
        box-shadow: 0 2px 12px rgba(26,115,232,0.06);
    }

    .accordion-button {
        font-weight: 600;
        font-size: 0.93rem;
        color: var(--texte-sombre);
        background: var(--blanc);
        border-radius: 14px !important;
        padding: 18px 22px;
    }

    .accordion-button:not(.collapsed) {
        color: var(--bleu-principal);
        background: var(--bleu-clair);
        box-shadow: none;
    }

    .accordion-button::after {
        filter: none;
    }

    .accordion-button:not(.collapsed)::after {
        filter: invert(28%) sepia(96%) saturate(1400%) hue-rotate(199deg);
    }

    .accordion-body {
        font-size: 0.9rem;
        color: var(--texte-gris);
        line-height: 1.75;
        background: var(--blanc);
        padding: 6px 22px 20px;
    }

    /* ---- SECTION TÉMOIGNAGES ---- */
    .section-temoignages {
        padding: 70px 0;
        background: var(--blanc);
    }

    .carte-temoignage {
        background: var(--gris-fond);
        border-radius: 18px;
        padding: 28px 26px;
        height: 100%;
        border: 1.5px solid var(--bordure);
        transition: box-shadow 0.2s;
    }

    .carte-temoignage:hover {
        box-shadow: 0 8px 28px rgba(26,115,232,0.10);
    }

    .etoiles {
        color: #F5A623;
        font-size: 0.9rem;
        margin-bottom: 14px;
    }

    .texte-temoignage {
        font-size: 0.9rem;
        color: var(--texte-sombre);
        line-height: 1.75;
        margin-bottom: 20px;
        font-style: italic;
    }

    .auteur-temoignage {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .avatar-auteur {
        width: 44px; height: 44px;
        border-radius: 50%;
        background: var(--bleu-principal);
        display: flex; align-items: center; justify-content: center;
        font-weight: 700;
        font-size: 1rem;
        color: var(--blanc);
        flex-shrink: 0;
    }

    .auteur-temoignage .nom {
        font-weight: 700;
        font-size: 0.9rem;
        color: var(--texte-sombre);
    }

    .auteur-temoignage .role {
        font-size: 0.78rem;
        color: var(--texte-gris);
    }

    /* ---- CTA FINAL ---- */
    .section-cta {
        padding: 70px 0;
        background: linear-gradient(135deg, var(--bleu-principal) 0%, var(--bleu-fonce) 100%);
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .section-cta::before {
        content: '';
        position: absolute;
        bottom: -80px; left: -80px;
        width: 280px; height: 280px;
        border-radius: 50%;
        background: rgba(255,255,255,0.06);
    }

    .section-cta::after {
        content: '';
        position: absolute;
        top: -60px; right: -60px;
        width: 220px; height: 220px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
    }

    .section-cta h2 {
        color: var(--blanc);
        font-size: clamp(1.5rem, 3.5vw, 2.2rem);
        font-weight: 800;
        margin-bottom: 14px;
        position: relative; z-index: 1;
    }

    .section-cta p {
        color: rgba(255,255,255,0.80);
        font-size: 0.97rem;
        margin-bottom: 30px;
        position: relative; z-index: 1;
    }

    .btn-cta-blanc {
        background: var(--blanc);
        color: var(--bleu-principal);
        font-weight: 700;
        border-radius: 30px;
        padding: 13px 36px;
        font-size: 0.95rem;
        text-decoration: none;
        display: inline-block;
        transition: transform 0.2s, box-shadow 0.2s;
        position: relative; z-index: 1;
        box-shadow: 0 4px 20px rgba(0,0,0,0.2);
    }

    .btn-cta-blanc:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(0,0,0,0.25);
        color: var(--bleu-fonce);
    }

    /* ---- ALERTE SUCCÈS ---- */
    .alerte-succes {
        background: #E8F5E9;
        border: 1.5px solid #A5D6A7;
        border-radius: 12px;
        padding: 16px 20px;
        color: #2E7D32;
        font-weight: 600;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }
</style>
@endpush

@section('content')

    {{-- ============================================================
         HERO
    ============================================================ --}}
    <section class="hero-contact">
        <div class="container">
            <div class="row align-items-end">

                {{-- Texte --}}
                <div class="col-lg-6 pb-5">
                    <p class="badge-section mb-3">📍 Nous contacter</p>
                    <h1 class="hero-titre">
                        Parlons maintenant à votre<br>
                        <span style="color: rgba(255,255,255,0.80);">médecin de confiance</span>
                    </h1>
                    <p class="hero-sous-titre">
                        Notre équipe médicale est disponible 7j/7 pour répondre
                        à toutes vos questions et vous orienter vers les meilleurs soins.
                    </p>
                    <a href="#formulaire-contact" class="btn-hero-rdv">
                        <i class="fas fa-calendar-plus me-2"></i>Prendre un rendez-vous
                    </a>
                </div>

                {{-- Image médecin --}}
                <div class="col-lg-6 d-flex justify-content-end align-items-end">
                    <img
                        src="https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=540&q=80"
                        alt="Médecin souriante"
                        class="hero-image"
                        style="max-width: 480px;"
                    >
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         STATS RAPIDES
    ============================================================ --}}
    <div class="container">
        <div class="stats-bande">
            <div class="row g-0 align-items-center justify-content-around">
                <div class="col-auto stat-item">
                    <div class="icone-stat"><i class="fas fa-user-md"></i></div>
                    <div class="chiffre">120+</div>
                    <div class="libelle">Médecins experts</div>
                </div>
                <div class="col-auto stat-separateur d-none d-md-block"></div>
                <div class="col-auto stat-item">
                    <div class="icone-stat"><i class="fas fa-heartbeat"></i></div>
                    <div class="chiffre">15k+</div>
                    <div class="libelle">Patients satisfaits</div>
                </div>
                <div class="col-auto stat-separateur d-none d-md-block"></div>
                <div class="col-auto stat-item">
                    <div class="icone-stat"><i class="fas fa-clock"></i></div>
                    <div class="chiffre">24h/7</div>
                    <div class="libelle">Disponibilité</div>
                </div>
                <div class="col-auto stat-separateur d-none d-md-block"></div>
                <div class="col-auto stat-item">
                    <div class="icone-stat"><i class="fas fa-stethoscope"></i></div>
                    <div class="chiffre">30+</div>
                    <div class="libelle">Spécialités</div>
                </div>
            </div>
        </div>
    </div>

    {{-- ============================================================
         FORMULAIRE + CARTE
    ============================================================ --}}
    <section class="section-formulaire" id="formulaire-contact">
        <div class="container">
            <div class="row g-5">

                {{-- FORMULAIRE --}}
                <div class="col-lg-7">
                    <span class="badge-section">✉️ Envoyez-nous un message</span>
                    <h2 class="titre-section mt-2">Formulaire de contact</h2>
                    <p class="sous-titre-section">
                        Remplissez ce formulaire, nous vous répondrons dans les 24 heures.
                    </p>

                    <div class="carte-formulaire">

                        {{-- Message de succès --}}
                        @if(session('succes'))
                            <div class="alerte-succes">
                                <i class="fas fa-check-circle"></i>
                                {{ session('succes') }}
                            </div>
                        @endif

                        {{-- Formulaire --}}
                        <form action="{{ route('contact.envoyer') }}" method="POST" novalidate>
                            @csrf

                            <div class="row g-3">
                                {{-- Nom --}}
                                <div class="col-md-6">
                                    <label class="form-label" for="nom">Nom <span style="color:red;">*</span></label>
                                    <input
                                        type="text"
                                        id="nom"
                                        name="nom"
                                        class="form-control @error('nom') is-invalid @enderror"
                                        placeholder="Votre nom"
                                        value="{{ old('nom') }}"
                                    >
                                    @error('nom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Prénom --}}
                                <div class="col-md-6">
                                    <label class="form-label" for="prenom">Prénom <span style="color:red;">*</span></label>
                                    <input
                                        type="text"
                                        id="prenom"
                                        name="prenom"
                                        class="form-control @error('prenom') is-invalid @enderror"
                                        placeholder="Votre prénom"
                                        value="{{ old('prenom') }}"
                                    >
                                    @error('prenom')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Email --}}
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Email <span style="color:red;">*</span></label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="votre@email.com"
                                        value="{{ old('email') }}"
                                    >
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Téléphone --}}
                                <div class="col-md-6">
                                    <label class="form-label" for="telephone">Téléphone</label>
                                    <input
                                        type="tel"
                                        id="telephone"
                                        name="telephone"
                                        class="form-control @error('telephone') is-invalid @enderror"
                                        placeholder="+221 77 000 00 00"
                                        value="{{ old('telephone') }}"
                                    >
                                    @error('telephone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Sujet --}}
                                <div class="col-12">
                                    <label class="form-label" for="sujet">Sujet <span style="color:red;">*</span></label>
                                    <select
                                        id="sujet"
                                        name="sujet"
                                        class="form-control @error('sujet') is-invalid @enderror"
                                    >
                                        <option value="" disabled {{ old('sujet') ? '' : 'selected' }}>
                                            Choisissez un sujet
                                        </option>
                                        <option value="rdv" {{ old('sujet') == 'rdv' ? 'selected' : '' }}>
                                            Prise de rendez-vous
                                        </option>
                                        <option value="info" {{ old('sujet') == 'info' ? 'selected' : '' }}>
                                            Demande d'informations
                                        </option>
                                        <option value="urgence" {{ old('sujet') == 'urgence' ? 'selected' : '' }}>
                                            Urgence médicale
                                        </option>
                                        <option value="autre" {{ old('sujet') == 'autre' ? 'selected' : '' }}>
                                            Autre
                                        </option>
                                    </select>
                                    @error('sujet')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Message --}}
                                <div class="col-12">
                                    <label class="form-label" for="message">Message <span style="color:red;">*</span></label>
                                    <textarea
                                        id="message"
                                        name="message"
                                        class="form-control @error('message') is-invalid @enderror"
                                        placeholder="Décrivez votre demande en détail..."
                                    >{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Bouton --}}
                                <div class="col-12">
                                    <button type="submit" class="btn-envoyer">
                                        <i class="fas fa-paper-plane me-2"></i>
                                        Envoyer le message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- CARTE + ADRESSE --}}
                <div class="col-lg-5">
                    <span class="badge-section">📍 Notre localisation</span>
                    <h2 class="titre-section mt-2">Où nous trouver</h2>
                    <p class="sous-titre-section">
                        Situés au cœur de Dakar, facilement accessibles en transport.
                    </p>

                    {{-- Carte Google Maps --}}
                    <div class="carte-localisation">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15437.66!2d-17.4441!3d14.6928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec172f5f9d3d33b%3A0x4d8ae24b7a4b8e1a!2sDakar%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2sfr!4v1700000000000"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    {{-- Infos adresse --}}
                    <div class="info-adresse">
                        <div class="ligne-info">
                            <div class="icone-info"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="texte-info">
                                <strong>Adresse</strong>
                                <span>123 Avenue de la Santé, Dakar, Sénégal</span>
                            </div>
                        </div>
                        <div class="ligne-info">
                            <div class="icone-info"><i class="fas fa-phone-alt"></i></div>
                            <div class="texte-info">
                                <strong>Téléphone</strong>
                                <span>+221 33 123 45 67</span>
                            </div>
                        </div>
                        <div class="ligne-info">
                            <div class="icone-info"><i class="fas fa-envelope"></i></div>
                            <div class="texte-info">
                                <strong>Email</strong>
                                <span>contact@medicare.sn</span>
                            </div>
                        </div>
                        <div class="ligne-info">
                            <div class="icone-info"><i class="fas fa-clock"></i></div>
                            <div class="texte-info">
                                <strong>Horaires</strong>
                                <span>Lun – Sam : 08h00 – 20h00</span>
                            </div>
                        </div>

                        <a href="https://maps.google.com" target="_blank" class="btn-itineraire">
                            <i class="fas fa-directions"></i>
                            Obtenir l'itinéraire
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ============================================================
         SERVICES / SPÉCIALITÉS
    ============================================================ --}}
    <section class="section-services">
        <div class="container">
            <div class="text-center mb-50" style="margin-bottom: 48px;">
                <span class="badge-section">🏥 Nos spécialités</span>
                <h2 class="titre-section mt-2">Support Médecin & Services</h2>
                <p class="sous-titre-section mx-auto" style="max-width:520px;">
                    Des professionnels qualifiés dans de nombreuses spécialités médicales
                    pour prendre soin de vous et de vos proches.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="carte-service">
                        <div class="icone-service"><i class="fas fa-heart"></i></div>
                        <h5>Cardiologie</h5>
                        <p>Diagnostic et traitement des maladies cardiaques avec des équipements modernes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="carte-service">
                        <div class="icone-service"><i class="fas fa-baby"></i></div>
                        <h5>Pédiatrie</h5>
                        <p>Soins spécialisés pour les enfants, du nouveau-né à l'adolescent.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="carte-service">
                        <div class="icone-service"><i class="fas fa-brain"></i></div>
                        <h5>Neurologie</h5>
                        <p>Prise en charge des troubles du système nerveux central et périphérique.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="carte-service">
                        <div class="icone-service"><i class="fas fa-eye"></i></div>
                        <h5>Ophtalmologie</h5>
                        <p>Examens visuels, traitements et chirurgie ophtalmologique de précision.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         FAQ
    ============================================================ --}}
    <section class="section-faq">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5">
                    <span class="badge-section">❓ FAQ</span>
                    <h2 class="titre-section mt-2">Questions fréquentes</h2>
                    <p class="sous-titre-section">
                        Trouvez rapidement les réponses aux questions les plus posées
                        par nos patients.
                    </p>
                    <a href="#formulaire-contact" class="btn-hero-rdv"
                       style="background: var(--bleu-principal); color: var(--blanc); box-shadow: 0 4px 18px rgba(26,115,232,0.30);">
                        <i class="fas fa-envelope me-2"></i>Poser une question
                    </a>
                </div>

                <div class="col-lg-7">
                    <div class="accordion" id="faqAccordion">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Comment prendre un rendez-vous ?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Vous pouvez prendre rendez-vous via notre formulaire de contact,
                                    par téléphone au +221 33 123 45 67, ou directement en vous
                                    présentant à notre accueil du lundi au samedi de 08h à 20h.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Quels sont vos horaires d'ouverture ?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous sommes ouverts du lundi au samedi de 08h00 à 20h00.
                                    Pour les urgences médicales, notre service d'urgence est
                                    disponible 24h/24 et 7j/7.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq3">
                                    Puis-je consulter en télémédecine ?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Oui, nous proposons des consultations en télémédecine via
                                    notre plateforme sécurisée. Contactez-nous pour plus
                                    d'informations et pour planifier votre consultation en ligne.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq4">
                                    Quelles assurances acceptez-vous ?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Nous acceptons la plupart des mutuelles et assurances maladie.
                                    Contactez notre service administratif pour vérifier la prise
                                    en charge de votre assurance spécifique.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         TÉMOIGNAGES
    ============================================================ --}}
    <section class="section-temoignages">
        <div class="container">
            <div class="text-center mb-50" style="margin-bottom: 48px;">
                <span class="badge-section">⭐ Avis patients</span>
                <h2 class="titre-section mt-2">Ils nous font confiance</h2>
                <p class="sous-titre-section mx-auto" style="max-width:480px;">
                    Découvrez les témoignages de nos patients qui ont fait confiance
                    à notre équipe médicale.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="carte-temoignage">
                        <div class="etoiles">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="texte-temoignage">
                            "Un accueil chaleureux et des médecins très compétents.
                            J'ai été prise en charge rapidement et efficacement.
                            Je recommande vivement MédiCare !"
                        </p>
                        <div class="auteur-temoignage">
                            <div class="avatar-auteur">AF</div>
                            <div>
                                <div class="nom">Aminata Fall</div>
                                <div class="role">Patiente · Cardiologie</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="carte-temoignage">
                        <div class="etoiles">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="texte-temoignage">
                            "Le Dr Diallo a suivi mon fils avec beaucoup de soin.
                            Les rendez-vous sont respectés et le personnel
                            est toujours disponible et souriant."
                        </p>
                        <div class="auteur-temoignage">
                            <div class="avatar-auteur" style="background:#0D47A1;">MD</div>
                            <div>
                                <div class="nom">Moussa Diop</div>
                                <div class="role">Parent · Pédiatrie</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="carte-temoignage">
                        <div class="etoiles">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="texte-temoignage">
                            "La téléconsultation m'a permis de consulter depuis chez moi
                            sans attente. Service très pratique et médecins très à l'écoute."
                        </p>
                        <div class="auteur-temoignage">
                            <div class="avatar-auteur" style="background:#388E3C;">FS</div>
                            <div>
                                <div class="nom">Fatou Sow</div>
                                <div class="role">Patiente · Télémédecine</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         CTA FINAL
    ============================================================ --}}
    <section class="section-cta">
        <div class="container">
            <h2>Besoin d'aide ou d'informations ?</h2>
            <p>
                Notre équipe est là pour vous accompagner à chaque étape.<br>
                N'hésitez pas à nous contacter, nous répondons sous 24h.
            </p>
            <a href="tel:+221331234567" class="btn-cta-blanc">
                <i class="fas fa-phone-alt me-2"></i>Appelez-nous maintenant
            </a>
        </div>
    </section>

@endsection