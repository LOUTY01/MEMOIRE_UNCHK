<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé</title>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

<header>

    <div class="logo">

        <i class="fas fa-heartbeat"></i>

        <h2>Sama Santé</h2>

    </div>

    <nav>

        <a href="{{ route('accueil') }}">Accueil</a>

        <a class="active" href="{{ route('service') }}">Services</a>

        <a href="{{ route('propos') }}">À propos</a>

        <a href="{{ route('rendezvous') }}">Rendez-vous</a>

        <a href="{{ route('contact') }}">Contact</a>

    </nav>

    <div class="menu-droite">

        <div class="zone-recherche">

            <input type="text" placeholder="Rechercher un rendez-vous..........">

            <i class="fa-solid fa-magnifying-glass"></i>

        </div>

        <i class="fa-solid fa-bell"></i>

        <a href="https://idap10.infinityfreeapp.com/">
        <!-- <img src="https://i.pravatar.cc/50" alt="profil" > -->
         <img src="{{ asset('images/homme.png') }}" >

    </a>

    </div>

</header>


<section class="notre-texte">

    <div class="contenue">

        <div class="badge">

            <i class="fa-solid fa-circle"></i>

            Nos Services

        </div>

        <h1>

            DES SERVICES DE SANTÉ MODERNES

            CONÇUS

            <span>POUR SIMPLIFIER VOTRE QUOTIDIEN</span>

        </h1>

        <p>

            Nous allions expertise médicale et innovation technologique <br> pour offrir aux Sénégalais  une expérience <br> de soin fluide, humaine et accessible partout.

        </p>
        
        <div class="centre">

        <button>

            Découvrir nos solutions

        </button>
    </div>

    </div>

</section>

<!-- deuxieme Partie -->

<section class="services">
    <div class="container">

        <h2>Un écosystème complet de soins</h2>
        <strong><p class="subtitle">
            Tout ce dont vous avez besoin pour gérer votre santé et
            celle de vos proches en un seul endroit.
        </p></strong>

        <div class="grid">

            <div class="card">
                <div class="icon"><i class="fa-solid fa-kit-medical"></i></div>
                <h3>Consultation générale</h3>
                <p>Accédez à des médecins qualifiés pour vos soins de routine.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-calendar-check"></i></div>
                <h3>Prise de rendez-vous</h3>
                <p>Réservez vos créneaux en ligne en quelques clics seulement.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-chart-line"></i></div>
                <h3>Suivi des maladies chroniques</h3>
                <p>Un accompagnement personnalisé pour votre équilibre quotidien.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-qrcode"></i></div>
                <h3>Ticket QR Code</h3>
                <p>Identification rapide à l'accueil pour gagner du temps.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-hourglass-half"></i></div>
                <h3>Suivi de file d'attente</h3>
                <p>Suivez votre rang en temps réel depuis votre smartphone.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-flask"></i></div>
                <h3>Examens et analyses</h3>
                <p>Recevez vos résultats de laboratoire directement sur l'application.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-shield-heart"></i></div>
                <h3>Assurance santé</h3>
                <p>Gérez vos couvertures et tiers-payant en toute simplicité.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-star-of-life"></i></div>
                <h3>Services d'urgence</h3>
                <p>Assistance rapide et localisation des centres ouverts.</p>
                <a href="#">En savoir plus →</a>
            </div>

            <div class="card">
                <div class="icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                <h3>Paiement en ligne</h3>
                <p>Réglez vos consultations via Mobile Money ou carte bancaire.</p>
                <a href="#">En savoir plus →</a>
            </div>

        </div>
    </div>
</section>



<section class="why-us">
    <div class="container">

        <div class="content">

            <!-- Partie gauche -->
            <div class="left">
                <h2>Pourquoi choisir Sama Santé ?</h2>

                <div class="features">

                    <div class="feature">
                        <i class="fa-solid fa-user-doctor"></i>
                        <h3>Professionnels qualifiés</h3>
                        <p>Un réseau de praticiens certifiés et rigoureusement sélectionnés.</p>
                    </div>

                    <div class="feature">
                        <i class="fa-solid fa-laptop-medical"></i>
                        <h3>Technologie moderne</h3>
                        <p>Des outils digitaux intuitifs pour une expérience patient fluide.</p>
                    </div>

                    <div class="feature">
                        <i class="fa-solid fa-earth-africa"></i>
                        <h3>Accessibilité</h3>
                        <p>La santé pour tous, disponible partout au Sénégal via mobile.</p>
                    </div>

                    <div class="feature">
                        <i class="fa-solid fa-shield-heart"></i>
                        <h3>Confidentialité</h3>
                        <p>Vos données de santé sont cryptées et strictement confidentielles.</p>
                    </div>

                </div>
            </div>

            <!-- Partie droite -->
            <div class="right">
                <div class="circle-image">
                    <img src="{{ asset('images/grandyoff.jpeg') }}" alt="Hopital">
                </div>
            </div>

        </div>

    </div>
</section>


<section class="how-it-works">
    <div class="container">

        <h2>Comment ça marche ?</h2>

        <div class="steps">

            <div class="step">
                <div class="number">1</div>
                <h3>Inscription</h3>
                <p>Créez votre compte en 2 minutes avec votre numéro.</p>
            </div>

            <div class="line"></div>

            <div class="step">
                <div class="number">2</div>
                <h3>Recherche</h3>
                <p>Trouvez un médecin ou un service par spécialité.</p>
            </div>

            <div class="line"></div>

            <div class="step">
                <div class="number">3</div>
                <h3>Réservation</h3>
                <p>Choisissez votre créneau et validez votre rendez-vous.</p>
            </div>

            <div class="line"></div>

            <div class="step">
                <div class="number">4</div>
                <h3>Consultation</h3>
                <p>Présentez votre QR code ou lancez l'appel vidéo.</p>
            </div>

        </div>

    </div>
</section>


<section class="cta-section">
        <div class="cta-box">
            <h2>Prêt à transformer votre parcours de santé ?</h2>
            <p>
                Prenez rendez-vous rapidement et sans attente avec les meilleurs spécialistes
                de la région.
            </p>

            <div class="cta-buttons">
                <a href="#" class="btn btn-light">Prendre rendez-vous</a>
                <a href="#" class="btn btn-outline">Nous contacter</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="pied-page">
        <div class="contenue-pied">

            <div class="colonne-pied">
                <div class="logo">
                    <i class="fa-solid fa-heart-pulse"></i>
                    <span>Sama Santé</span>
                </div>

                <p>
                    Sama Santé est une plateforme de gestion de files d'attente
                    et de rendez-vous médicaux en ligne au Sénégal.
                </p>
            </div>

            <div class="colonne-pied">
                <h4>Navigation</h4>
                <ul>
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('service') }}">Services</a></li>
                    <li><a href="{{ route('rendezvous') }}">Rendez-vous</a></li>
                    <li><a href="{{ route('propos') }}">À propos</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>

            <div class="colonne-pied">
                <h4>Services</h4>
                <ul>
                    <li><a href="#">Consultation générale</a></li>
                    <li><a href="#">Prise de rendez-vous</a></li>
                    <li><a href="#">Achat de ticket</a></li>
                    <li><a href="#">Suivi de file</a></li>
                    <li><a href="#">Services d'urgence</a></li>
                </ul>
            </div>

            <div class="colonne-pied">
                <h4>Contact</h4>

                <p><i class="fa-solid fa-phone"></i> +221 77 123 45 67</p>
                <p><i class="fa-regular fa-envelope"></i> contact@samasante.sn</p>
                <p><i class="fa-solid fa-location-dot"></i> Dakar, Sénégal</p>

                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>

        </div>

        <div class="footer-bottom">
            © 2025 Sama Santé. Tous droits réservés.
        </div>
    </footer>




<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
/* background:#f5f5f5; */
padding:10px;
/* background-image: url("hopital.png"); */

background: linear-gradient(to right,    #84DBF0);
}




header{
height:70px;
background:white;

display:flex;

justify-content:space-between;

align-items:center;

padding:0 25px;

border-radius:15px;
}

.logo{
display:flex;
align-items:center;
gap:10px;
}

.logo i{
color:#1688e8;
font-size:22px;
}

.logo h2{
color:#1688e8;
font-size:22px;
}

nav{
display:flex;
gap:30px;
}

nav a{

text-decoration:none;

color:black;

font-size:14px;
}

.active{
color:#1688e8;

border-bottom:2px solid #1688e8;

padding-bottom:6px;
}

.menu-droite{

display:flex;

align-items:center;

gap:15px;
}



.zone-recherche{

display:flex;

align-items:center;

background:#f0f0f0;

padding:8px 15px;

gap:12px;

border-radius:25px;
}

.zone-recherche input{

border:none;

outline:none;


background:transparent;
}

.zone-recherche i{

color:rgb(134, 98, 98);
}

.menu-droite img{

width:35px;

height:35px;

border-radius:50%;
}
.notre-texte{
    margin-top:10px;
    height:600px;
   background-image: url('{{ asset('images/bienvenue.png') }}');
    background-size:cover;
    background-position:center;
    border-radius:0 0 120px 0;
    position:relative;
    overflow:hidden;
}

.contenue{
    position:absolute;
    top:30px;
    left:0;
    width:550px;
    background:rgba(255,255,255,0.75);
    padding:2px;
    border-radius:0 40px 40px 0;
    backdrop-filter:blur(4px);

    /* Animation */
    opacity:0;
    animation:apparitionGauche 1.2s ease-out forwards;
}

@keyframes apparitionGauche{
    from{
        opacity:0;
        transform:translateX(-120px);
    }

    to{
        opacity:1;
        transform:translateX(0);
    }
}


.badge{

display:inline-flex;

align-items:center;

gap:10px;

background:#1688e8;

color:white;

padding:7px 15px;

border-radius:20px;

font-size:12px;
}

.badge i{
font-size:8px;
}

h1{

margin-top:20px;

font-size:30px;

font-style:italic;
text-align: center;

line-height:1.2;
}

h1 span{
color:#1688e8;
}

p{

margin-top:25px;

font-size:18px;
text-align: center;

line-height:1.6;
}

button{

margin-top:30px;

background:#1688e8;

color:white;

border:none;

padding:18px 30px ;

border-radius:8px;

cursor:pointer;
}
.centre{
    text-align: center;
}

button:hover{

background:#0068c8;
}

@media(max-width:900px){

header{

flex-direction:column;

height:auto;

padding:20px;

gap:20px;
}

nav{

flex-wrap:wrap;

justify-content:center;
}

.overlay{

width:95%;

left:10px;
}

h1{

font-size:28px;
}

}

/* Deuxieme partie */


.services{
    padding:60px 20px;
}


.container{
    max-width:1200px;
    margin:auto;
}

h2{
    text-align:center;
    font-size:40px;
    color:#222;
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    color:#666;
    max-width:650px;
    margin:0 auto 50px;
    font-size:18px;
}

.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
    gap:20px;
}

.card{
    background:#fff;
    padding:30px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-3px);
}

.icon{
    width:45px;
    height:45px;
    background:#e8f8f4;
    color:#1e90ff;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:10px;
    margin-bottom:20px;
    font-size:18px;
}

.card h3{
    font-size:24px;
    color:#222;
    margin-bottom:12px;
}

.card p{
    color:#666;
    line-height:1.6;
    margin-bottom:18px;
}

.card a{
    color:#1e90ff;
    text-decoration:none;
    font-weight:600;
}

.card a:hover{
    text-decoration:underline;
}

/* ==========================
   RESPONSIVE DESIGN
========================== */

/* Tablettes */
@media screen and (max-width: 992px){

    header{
        flex-direction: column;
        height: auto;
        padding: 15px;
        gap: 15px;
    }

    nav{
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .menu-droite{
        width: 100%;
        justify-content: center;
        flex-wrap: wrap;
    }

    .zone-recherche{
        width: 100%;
        max-width: 450px;
    }

    .zone-recherche input{
        width: 100%;
    }

    .contenue{
        width: 90%;
        max-width: 550px;
        left: 0;
        right: 0;
        margin: auto;
        padding: 15px;
    }

    h1{
        font-size: 28px;
    }

    h2{
        font-size: 32px;
    }

    .subtitle{
        font-size: 17px;
    }
}

/* Mobiles */
@media screen and (max-width: 768px){

    body{
        padding: 5px;
    }

    header{
        border-radius: 10px;
    }

    .logo h2{
        font-size: 20px;
    }

    nav{
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    nav a{
        font-size: 15px;
    }

    .menu-droite{
        flex-direction: column;
        gap: 10px;
    }

    .zone-recherche{
        width: 100%;
        
    }

    .notre-texte{
        min-height: 650px;
        height: auto;
        border-radius: 0 0 60px 0;
    }

    .contenue{
        position: relative;
        top: 20px;
        width: 95%;
        max-width: 100%;
        border-radius: 20px;
    }

    h1{
        font-size: 22px;
        text-align: center;
    }

    p{
        font-size: 16px;
        text-align: center;
    }

    button{
        width: 100%;
        max-width: 300px;
        padding: 15px;
    }

    h2{
        font-size: 28px;
    }

    .subtitle{
        font-size: 15px;
        padding: 0 10px;
    }

    .grid{
        grid-template-columns: 1fr;
    }

    .card{
        padding: 20px;
    }

    .card h3{
        font-size: 20px;
    }

    .card p{
        font-size: 15px;
    }
}

/* Petits téléphones */
@media screen and (max-width: 480px){

    .logo{
        flex-direction: column;
        text-align: center;
        gap: 5px;
    }

    .logo h2{
        font-size: 18px;
    }

    .logo i{
        font-size: 20px;
    }

    .badge{
        font-size: 11px;
        padding: 6px 12px;
    }

    h1{
        font-size: 18px;
        line-height: 1.4;
    }

    p{
        font-size: 14px;
        line-height: 1.5;
    }

    h2{
        font-size: 22px;
    }

    .subtitle{
        font-size: 14px;
    }

    .card{
        padding: 15px;
    }

    .card h3{
        font-size: 18px;
    }

    .card p{
        font-size: 14px;
    }

    .icon{
        width: 40px;
        height: 40px;
        font-size: 16px;
    }

    .menu-droite img{
        width: 30px;
        height: 30px;
    }
}






.why-us{
    background:#f4f7fb;
    padding:80px 20px;
}

.container{
    max-width:1200px;
    margin:auto;
}

.content{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:60px;
}

.left{
    flex:1;
}

.left h2{
    font-size:38px;
    margin-bottom:40px;
    color:#111;
}

.features{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:35px;
}

.feature i{
    color:#1e88e5;
    font-size:22px;
    margin-bottom:12px;
}

.feature h3{
    font-size:22px;
    margin-bottom:10px;
    color:#111;
}

.feature p{
    color:#555;
    line-height:1.7;
}

.right{
    flex:1;
    display:flex;
    justify-content:center;
}

.circle-image{
    width:420px;
    height:420px;
    border-radius:50%;
    padding:12px;
    background:linear-gradient(135deg,#0a6ea8,#26a6ff);
}

.circle-image img{
    width:100%;
    height:100%;
    border-radius:50%;
    object-fit:cover;
    border:15px solid #eaf2fb;
}

@media(max-width:900px){

    .content{
        flex-direction:column;
    }

    .features{
        grid-template-columns:1fr;
    }

    .circle-image{
        width:320px;
        height:320px;
    }

    .left h2{
        text-align:center;
    }
}


.how-it-works{
    background:#f5f7fa;
    padding:80px 20px;
}

.container{
    max-width:1200px;
    margin:auto;
}

.how-it-works h2{
    text-align:center;
    font-size:38px;
    color:#111;
    margin-bottom:70px;
}

.steps{
    display:flex;
    align-items:flex-start;
    justify-content:center;
    gap:20px;
    flex-wrap:wrap;
}

.step{
    width:200px;
    text-align:center;
}

.number{
    width:40px;
    height:40px;
    background:#1e88e5;
    color:white;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:0 auto 20px;
    font-weight:bold;
    font-size:16px;
}

.step h3{
    font-size:24px;
    color:#111;
    margin-bottom:10px;
}

.step p{
    color:#666;
    font-size:15px;
    line-height:1.6;
}

.line{
    width:60px;
    height:2px;
    background:#d6ebe6;
    margin-top:20px;
}

@media (max-width: 900px){

    .steps{
        flex-direction:column;
        align-items:center;
    }

    .line{
        width:2px;
        height:40px;
        margin:0;
    }

    .step{
        width:100%;
        max-width:300px;
    }
}


/* la pied de page */

.cta-section {
    padding: 50px 20px;
}

.cta-box {
    max-width: 1150px;
    margin: auto;
    background: linear-gradient(135deg, #1593e8, #0077c8);
    color: white;
    text-align: center;
    padding: 60px 20px;
    border-radius: 8px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.cta-box h2 {
    font-size: 42px;
    margin-bottom: 15px;
    font-weight: 700;
    color: white;
}

.cta-box p {
    max-width: 650px;
    margin: auto;
    opacity: 0.9;
    line-height: 1.6;
}

.cta-buttons {
    margin-top: 30px;
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.btn {
    text-decoration: none;
    padding: 14px 28px;
    border-radius: 5px;
    transition: 0.3s;
    font-size: 15px;
}

.btn-light {
    background: white;
    color: #0077c8;
}

.btn-light:hover {
    background: #f1f1f1;
}

.btn-outline {
    border: 1px solid white;
    color: white;
}

.btn-outline:hover {
    background: rgba(255,255,255,0.15);
}

/* FOOTER */
.pied-page {
    background: linear-gradient(135deg, #0f8fe4, #006db5);
    color: white;
    padding-top: 60px;
}

.contenue-pied {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 40px;
}

.logo {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: bold;
    font-size: 22px;
    margin-bottom: 15px;
}

.logo i {
    font-size: 24px;
}

.colonne-pied h4 {
    margin-bottom: 18px;
    font-size: 18px;
}

.colonne-pied p,
.colonne-pied a {
    color: rgba(255,255,255,0.85);
    text-decoration: none;
    font-size: 14px;
    line-height: 2;
}

.colonne-pied ul {
    list-style: none;
}

.colonne-pied ul li {
    margin-bottom: 6px;
}

.colonne-pied a:hover {
    color: white;
}

.social-icons {
    margin-top: 20px;
    display: flex;
    gap: 12px;
}

.social-icons a {
    width: 38px;
    height: 38px;
    background: white;
    color: #0077c8;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: 0.3s;
    
}

.social-icons a:hover {
    transform: translateY(-3px);
}

.footer-bottom {
    text-align: center;
    padding: 20px;
    margin-top: 40px;
    border-top: 1px solid rgba(255,255,255,0.2);
    font-size: 13px;
    color: rgba(255,255,255,0.8);
}

 
@media screen and (max-width: 992px){

    header{
        flex-direction: column;
        height: auto;
        padding: 15px;
        gap: 15px;
    }

    nav{
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }

    .menu-droite{
        width: 100%;
        justify-content: center;
        flex-wrap: wrap;
    }

    .zone-recherche{
        width: 100%;
        max-width: 450px;
    }

    .zone-recherche input{
        width: 100%;
    }

    .contenue{
        width: 90%;
        max-width: 550px;
        left: 0;
        right: 0;
        margin: auto;
        padding: 15px;
    }

    h1{
        font-size: 28px;
    }

    h2{
        font-size: 32px;
    }

    .subtitle{
        font-size: 17px;
    }
}

    
</style>