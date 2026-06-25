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

    
</style>