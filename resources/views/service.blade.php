<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <link rel="stylesheet" href="continuité.css">
   <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
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
                    <img src="{{ asset('images/GRandyoff.jpeg') }}" alt="Hopital">
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
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Rendez-vous</a></li>
                    <li><a href="#">À propos</a></li>
                    <li><a href="#">Contact</a></li>
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
</body>
</html>
<style>
    *{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}
.services{
    padding:60px 20px;
}

body{
    background: linear-gradient(to right,  #84DBF0);
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
    transform:translateY(-5px);
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
    padding: 12px;
    background:linear-gradient(135deg,#0a6ea8,#26a6ff);
    justify-content: center;
    align-items: center;
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
</style>