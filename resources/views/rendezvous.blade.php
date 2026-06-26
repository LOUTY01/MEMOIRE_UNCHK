<!DOCTYPE html>
<html lang="fr">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Sama Santé - RDV</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-gray-50">


  <!-- 1. NAVBAR -->
  <nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <div class="text-blue-600 font-bold text-xl">Sama Santé</div>
      <div class="hidden md:flex gap-6 text-sm">
        <a href="#">Accueil</a>
        <a href="#">Services</a>
        <a href="#" class="text-blue-600 font-semibold">Prendre RDV</a>
        <a href="#">Contact</a>
      </div>
      <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
    </div>
  </nav>

  <!-- 2. HERO + FORMULAIRE -->
  <section class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-2 gap-8">
    <div>
      <h1 class="text-4xl font-bold">Réservez votre consultation <span class="text-blue-500">en quelques minutes</span></h1>
      <p class="text-gray-600 mt-4">Choisissez votre service, payez en ligne via Orange Money et suivez votre position dans la file d'attente en temps réel.</p>
      <button class="mt-6 bg-blue-500 text-white px-6 py-3 rounded-lg">En savoir plus</button>
    </div>
    <img src="homme-telephone.jpg" alt="RDV" class="rounded-2xl object-cover">
  </section>

  <!-- 3. FINALISEZ VOTRE RESERVATION - FORM -->
  <section class="max-w-7xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-center mb-8">Finalisez votre réservation</h2>
    
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Colonne gauche : Service + Médecin + Patient -->
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold mb-4">1. Quel service recherchez-vous?</h3>
        <select class="w-full border rounded-lg p-3 mb-4">
          <option>Consultation générale</option>
        </select>
        
        <h3 class="font-semibold mb-4">Choisissez un médecin</h3>
        <div class="flex items-center gap-3 p-3 border rounded-lg mb-2">
          <img src="doctor1.jpg" class="w-12 h-12 rounded-full">
          <div>
            <p class="font-semibold">Dr. Mouhamadou Ndiaye</p>
            <p class="text-sm text-gray-500">Médecine générale</p>
          </div>
        </div>

        <h3 class="font-semibold mt-6 mb-4">Informations du patient</h3>
        <input placeholder="Nom complet" class="w-full border rounded-lg p-3 mb-3">
        <input placeholder="Motif de consultation" class="w-full border rounded-lg p-3">
      </div>

      <!-- Colonne droite : Calendrier + Paiement -->
      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="font-semibold mb-4">Choisissez une date</h3>
        <!-- Calendrier simplifié -->
        <div class="grid grid-cols-7 gap-2 text-center text-sm">
          <button class="p-2 rounded hover:bg-blue-100">1</button>
          <button class="p-2 rounded bg-blue-500 text-white">2</button>
          <button class="p-2 rounded hover:bg-blue-100">3</button>
        </div>

        <h3 class="font-semibold mt-6 mb-4">Méthode de paiement</h3>
        <div class="flex gap-4">
          <label class="flex items-center gap-2 border p-3 rounded-lg cursor-pointer">
            <input type="radio" name="pay" checked> Wave
          </label>
          <label class="flex items-center gap-2 border p-3 rounded-lg cursor-pointer">
            <input type="radio" name="pay"> Orange Money
          </label>
        </div>

        <div class="mt-6 p-4 bg-gray-50 rounded-lg">
          <div class="flex justify-between text-sm">
            <span>Consultation</span><span>10,000 FCFA</span>
          </div>
          <div class="flex justify-between font-bold mt-2">
            <span>Total</span><span>10,000 FCFA</span>
          </div>
          <button class="w-full bg-blue-500 text-white py-3 rounded-lg mt-4">Payer maintenant</button>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. SUIVEZ VOTRE POSITION - LA PARTIE DE TA PHOTO 2 -->
  <section class="bg-blue-50 py-12">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-2xl font-bold text-center mb-8">Suivez votre position en direct</h2>
      
      <div class="flex flex-col md:flex-row gap-6 items-start">
        <!-- Ticket -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg w-full md:w-80">
          <div class="bg-blue-500 text-white p-3">
            <p class="text-xs">SAMA SANTE TICKET</p>
            <p class="font-bold">Ticket de Consultation</p>
          </div>
          <div class="p-6 text-center">
            <div class="w-32 h-32 bg-gray-200 rounded-lg mx-auto flex items-center justify-center">QR</div>
            <p class="mt-4 font-semibold">Moussa Ndiaye</p>
            <p class="text-blue-500 font-bold text-lg">#SAM-2049</p>
            <div class="flex justify-between w-full mt-4 text-xs text-gray-500">
              <div><p>DATE</p><p class="font-semibold text-black">12 Oct 2024</p></div>
              <div class="text-right"><p>HEURE</p><p class="font-semibold text-black">14:30</p></div>
            </div>
          </div>
        </div>

        <!-- Infos file -->
        <div class="flex-1">
          <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="bg-white rounded-xl p-4 text-center">
              <p class="text-3xl">👥</p>
              <p class="text-xs text-gray-500">Position actuelle</p>
              <p class="text-3xl font-bold text-blue-500">#12</p>
            </div>
            <div class="bg-white rounded-xl p-4 text-center">
              <p class="text-3xl">⏱️</p>
              <p class="text-xs text-gray-500">Temps estimé</p>
              <p class="text-3xl font-bold text-blue-500">18 min</p>
            </div>
          </div>
          
          <div class="bg-white rounded-xl p-4">
            <div class="flex justify-between items-center mb-2">
              <p class="font-semibold">Progression de la file</p>
              <button class="text-xs bg-blue-500 text-white px-3 py-1 rounded-full">Actualiser</button>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div class="bg-blue-500 h-2 rounded-full w-3/5"></div>
            </div>
          </div>
          
          <div class="flex gap-3 mt-4">
            <button class="flex-1 bg-gray-200 py-3 rounded-lg text-sm">🔔 M'alerter par SMS</button>
            <button class="flex-1 bg-gray-200 py-3 rounded-lg text-sm">↗️ Partager mon ticket</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 5. POURQUOI CHOISIR + 6. TÉMOIGNAGES + FOOTER -->
  <!-- Tu copies la même logique avec grid md:grid-cols-4 -->
  
  <footer class="footer">

<div class="container">

<div class="row gy-4">

<div class="col-lg-3">

<h5 class="footer-title d-flex align-items-center gap-2">
    <img src="{{ asset('images/icone-sama-sante.png') }}"
         alt="Sama Santé"
         width="30"
         height="30">
    Sama Santé
</h5>

<p>
La plateforme qui révolutionne la gestion
des rendez-vous médicaux au Sénégal.
</p>

</div>

<div class="col-lg-3">

<h5 class="footer-title">
Navigation
</h5>

<ul class="footer-links">

<li><a href="#">Accueil</a></li>

<li><a href="#">Services</a></li>

<li><a href="#">Rendez-vous</a></li>

<li><a href="#">À propos</a></li>

<li><a href="#">Contact</a></li>

</ul>

</div>

<div class="col-lg-3">

<h5 class="footer-title">
Services
</h5>

<ul class="footer-links">

<li>Consultation médicale</li>

<li>Paiement sécurisé</li>

<li>Réservation rapide</li>

<li>Ticket QR Code</li>

<li>Suivi d'attente</li>

</ul>

</div>

<div class="col-lg-3">

<h5 class="footer-title">
Contact
</h5>

<p>📞 +221 77 123 45 67</p>

<p>✉ contact@samasante.sn</p>

<p>📍 Dakar, Sénégal</p>

<div class="social-icons">

<a href="#"><i class="bi bi-facebook"></i></a>

<a href="#"><i class="bi bi-instagram"></i></a>

<a href="#"><i class="bi bi-linkedin"></i></a>

<a href="#"><i class="bi bi-twitter"></i></a>

</div>

</div>

</div>

<hr>

<div class="text-center py-3">
© 2026 Sama Santé - Tous droits réservés
</div>

</div>

</footer>
<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
font-family:'Segoe UI',sans-serif;
background:#f7fbff;
overflow-x:hidden;
}

/* NAVBAR */

.navbar{
background:#fff;
height:75px;
box-shadow:0 2px 15px rgba(0,0,0,.05);
z-index:1000;
}

.logo{
    display:flex;
    align-items:center;
    gap:8px;
    text-decoration:none;
    color:#1c8adb;
    font-size:22px; /* plus petit */
    font-weight:700;
    white-space:nowrap;
    line-height:1;
}

.logo:hover{
    color:#1c8adb;
    text-decoration:none;
}

.logo-img{
    width:40px;   /* réduit */
    height:40px;
    padding:6px;
    background:#1c8adb;
    border-radius:10px;
    object-fit:contain;
}
.navbar-nav .nav-link{
font-size:14px;
color:#222;
margin:0 10px;
font-weight:500;
}

.navbar-nav .nav-link:hover{
color:#1c8adb;
}

.search-box{
width:250px;
border-radius:30px;
padding:8px 15px;
background:#f5f7fb;
border:none;
font-size:13px;
}

.btn-login{
border:1px solid #1c8adb;
color:#1c8adb;
padding:8px 20px;
border-radius:10px;
text-decoration:none;
font-size:14px;
font-weight:600;
}

.btn-register{
background:#1c8adb;
color:white;
padding:8px 20px;
border-radius:10px;
text-decoration:none;
font-size:14px;
font-weight:600;
}

.avatar{
width:35px;
height:35px;
border-radius:50%;
object-fit:cover;
}

/* HERO */

.hero{
    position:relative;
    min-height:90vh;
    display:flex;
    align-items:center;

    background:url("{{ asset('images/doctors.png') }}") no-repeat center;
    background-size:cover;
}

/* overlay presque invisible */
.hero::before{
    content:"";
    position:absolute;
    inset:0;
    background:rgba(255,255,255,0.08); /* presque rien */
}

/* contenu */
.hero-content{
    position:relative;
    z-index:2;
    max-width:600px;
}

/* carte ULTRA transparente */
.hero-card{
    background:rgba(255,255,255,0.10); /* très léger */
    backdrop-filter:blur(3px);         /* flou très faible */
    -webkit-backdrop-filter:blur(3px);

    padding:55px;
    border-radius:25px;
}

/* texte un peu plus contrasté pour rester lisible */
.hero-title{
    font-size:52px;
    font-weight:800;
    line-height:1.1;
    color:#0b1220;
}

.hero-title span{
    color:#1989d7;
    display:block;
}

.hero-text{
    margin-top:25px;
    font-size:20px;
    color:#111827;
}

.btn-hero{
    display:inline-block;
    margin-top:25px;
    background:rgba(25,137,215,0.85);
    color:white;
    padding:14px 35px;
    border-radius:10px;
    text-decoration:none;
    font-weight:600;
}

/* VAGUE */

.wave{
position:absolute;
bottom:0;
left:0;
width:100%;
height:170px;
background:
linear-gradient(
90deg,
#1c6b59,
#8dc5ad,
#e6ce6a
);

clip-path:polygon(
0 70%,
10% 60%,
20% 75%,
35% 50%,
50% 80%,
65% 45%,
80% 65%,
100% 50%,
100% 100%,
0 100%
);

opacity:.9;
}

.section{
padding:100px 0;
}

.section-title{
text-align:center;
margin-bottom:60px;
}

.section-title h5{
color:#1c8adb;
font-weight:700;
}

.section-title h2{
font-weight:800;
font-size:42px;
}
.service-card{
background:white;
padding:35px;
border-radius:20px;
height:100%;
box-shadow:0 5px 20px rgba(0,0,0,.05);
transition:.3s;
}

.service-card:hover{
transform:translateY(-5px);
}

.service-icon{
width:55px;
height:55px;
background:#edf7ff;
color:#1c8adb;
border-radius:12px;
display:flex;
align-items:center;
justify-content:center;
font-size:22px;
margin-bottom:20px;
}

.timeline-wrapper{
position:relative;
}

.timeline-line{
position:absolute;
top:28px;
left:10%;
width:80%;
height:3px;
background:#1c8adb;
z-index:0;
}

.step-circle{
width:60px;
height:60px;
border-radius:50%;
background:#dff0ff;
color:#1c8adb;
display:flex;
align-items:center;
justify-content:center;
margin:auto;
font-size:22px;
position:relative;
z-index:2;
}

.step-circle.active{
background:#1c8adb;
color:white;
}

.step p{
font-size:13px;
}

.stat-box{
background:white;
padding:30px;
border-radius:15px;
text-align:center;
box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.stat-box h3{
font-size:42px;
font-weight:800;
color:#1c8adb;
}

.stat-box span{
font-size:12px;
font-weight:700;
letter-spacing:1px;
}

.advantage-box{
background:#eaf6ff;
padding:40px;
border-radius:18px;
height:100%;
}

.primary-box{
background:#1989d7;
color:white;
}

.adv-icon{
font-size:28px;
margin-bottom:20px;
}
.phone-img{
width:280px;
border-radius:35px;
box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.experience-title{
font-size:50px;
font-weight:800;
margin-bottom:40px;
}

.feature-item{
display:flex;
gap:15px;
margin-bottom:30px;
}

.feature-item i{
font-size:22px;
color:#1989d7;
}

.testimonial-section{
background:#eef5fc;
padding:100px 0;
}

.testimonial-card{
background:white;
padding:35px;
border-radius:20px;
height:100%;
box-shadow:0 5px 15px rgba(0,0,0,.05);
}

.stars{
color:#ffc107;
font-size:18px;
margin-bottom:20px;
}

.user-box{
display:flex;
align-items:center;
gap:12px;
margin-top:20px;
}

.user-box img{
width:50px;
height:50px;
border-radius:50%;
object-fit:cover;
}

.cta-box{
background:linear-gradient(
135deg,
#0068b5,
#2da8ff
);
padding:80px;
border-radius:30px;
color:white;
box-shadow:0 15px 40px rgba(0,104,181,.25);
}

.footer{
background:#0068b5;
color:white;
padding-top:70px;
}

.footer-title{
font-weight:700;
margin-bottom:20px;
}

.footer-links{
list-style:none;
padding:0;
}

.footer-links li{
margin-bottom:10px;
}

.footer-links a{
color:white;
text-decoration:none;
}

.social-icons{
display:flex;
gap:15px;
margin-top:15px;
}

.social-icons a{
width:40px;
height:40px;
background:rgba(255,255,255,.15);
border-radius:50%;
display:flex;
align-items:center;
justify-content:center;
color:white;
text-decoration:none;
font-size:18px;
}
.search-box{
    text-transform: uppercase;
}
.resultat-container{
    width:100%;
    display:flex;
    justify-content:center;
    margin-top:40px;
}

.resultat-box{
    width:700px;
}

.resultat-card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 20px rgba(0,0,0,.08);
    margin-bottom:15px;
}

.resultat-card img{
    width:120px;
    height:120px;
    object-fit:cover;
    border-radius:50%;
    margin:auto;
    margin-top:20px;
}
.navbar-nav {
    flex-wrap: nowrap;
}

.navbar-nav .nav-link {
    white-space: nowrap;
}
</style>
</body>
</html>