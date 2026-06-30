
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sama Santé Dashboard</title>

    <!-- GOOGLE FONT -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->

    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- CSS -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- CHART JS -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body>

<div class="dashboard">

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div>

            <div class="logo">

                <div class="logo-icon">
                    <i class="fa-solid fa-heart-pulse"></i>
                </div>

                <div>

                    <h2>Sama Santé</h2>

                    <p>Admin Panel</p>

                </div>

            </div>

            <ul class="menu">

                <li class="menu-item active" data-page="Dashboard">
                    <a href="#">
                        <i class="fa-solid fa-house"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Doctors">
                    <a href="#">
                        <i class="fa-solid fa-user-doctor"></i>
                        <span>Doctors</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Patients">
                    <a href="#">
                        <i class="fa-solid fa-user-group"></i>
                        <span>Patients</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Appointments">
                    <a href="#">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Appointments</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Facilities">
                    <a href="#">
                        <i class="fa-solid fa-hospital"></i>
                        <span>Facilities</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Payments">
                    <a href="#">
                        <i class="fa-solid fa-money-bill-wave"></i>
                        <span>Payments</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Statistics">
                    <a href="#">
                        <i class="fa-solid fa-chart-line"></i>
                        <span>Statistics</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Reviews">
                    <a href="#">
                        <i class="fa-solid fa-star"></i>
                        <span>Reviews</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Messages">
                    <a href="#">
                        <i class="fa-solid fa-envelope"></i>
                        <span>Messages</span>
                    </a>
                </li>

                <li class="menu-item" data-page="Settings">
                    <a href="#">
                        <i class="fa-solid fa-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>

            </ul>

        </div>

        <div class="sidebar-footer">

            <img src="https://i.pravatar.cc/100?img=12">

            <div>

                <h4>Admin Principal</h4>
        

                <p>admin@samasante.com </p>

            </div>

        </div>

    </aside>

    <!-- MAIN -->

    <main class="main-content">

        <!-- TOPBAR -->

        <div class="topbar">

            <div class="search-box">

                <i class="fa-solid fa-search"></i>

                <input
                type="text"
                id="searchInput"
                placeholder="Rechercher un patient, un médecin..."
                >

            </div>

            <div class="top-icons">

                <div class="notification" id="notificationBtn">

                    <i class="fa-regular fa-bell"></i>

                    <span id="notifCount">4</span>

                </div>

                <img src="https://i.pravatar.cc/100?img=15">

            </div>

        </div>

        <!-- WELCOME -->

        <section class="welcome">

            <div>

                <h1>Bonjour Administrateur 👋</h1>

                <p>
                    Voici un aperçu des activités de la plateforme aujourd’hui.
                </p>

            </div>

            <button class="date-btn" id="dateBtn">

                samedi 25 avril 2026

            </button>

        </section>

        <!-- STATS -->

        <section class="stats">

            <div class="stat-card clickable-card" data-page="Doctors">

                <div class="stat-icon blue">
                    <i class="fa-solid fa-user-doctor"></i>
                </div>

                <div>

                    <h2 id="doctorCount">520</h2>

                    <p>Médecins actifs</p>

                </div>

            </div>

            <div class="stat-card clickable-card" data-page="Patients">

                <div class="stat-icon cyan">
                    <i class="fa-solid fa-user-group"></i>
                </div>

                <div>

                    <h2>12 450</h2>

                    <p>Patients inscrits</p>

                </div>

            </div>

            <div class="stat-card clickable-card" data-page="Appointments">

                <div class="stat-icon orange">
                    <i class="fa-solid fa-calendar-check"></i>
                </div>

                <div>

                    <h2>1280</h2>

                    <p>Rendez-vous</p>

                </div>

            </div>

            <div class="stat-card clickable-card" data-page="Payments">

                <div class="stat-icon green">
                    <i class="fa-solid fa-money-bill-wave"></i>
                </div>

                <div>

                    <h2>8.5M FCFA</h2>

                    <p>Revenus totaux</p>

                </div>

            </div>

        </section>

        <!-- ACTIONS -->

        <section class="actions-alerts">

            <div class="actions-box">

                <h2>Actions Rapides</h2>

                <div class="actions-grid">

                    <button class="action-btn blue-btn" onclick="addDoctor()">
                        <i class="fa-solid fa-user-doctor"></i>
                        Ajouter médecin
                    </button>

                    <button class="action-btn cyan-btn" onclick="addPatient()">
                        <i class="fa-solid fa-user"></i>
                        Ajouter patient
                    </button>

                    <button class="action-btn orange-btn" onclick="createAppointment()">
                        <i class="fa-solid fa-calendar-plus"></i>
                        Créer RDV
                    </button>

                </div>

            </div>

            <div class="alerts-box">

                <h2>Alertes Critiques</h2>

                <div class="alert-item yellow">
                    12 rendez-vous non confirmés
                </div>

                <div class="alert-item blue-alert">
                    3 médecins en attente
                </div>

                <div class="alert-item red">
                    6 paiements échoués
                </div>

            </div>

        </section>

        <!-- CHART + SPECIALITES -->

        <section class="chart-speciality">

            <div class="chart-card">

                <div class="section-title">

                    <h2>Évolution des Rendez-vous</h2>

                    <select id="chartFilter">

                        <option>7 derniers jours</option>
                        <option>30 derniers jours</option>
                        <option>1 année</option>

                    </select>

                </div>

                <canvas id="appointmentChart"></canvas>

            </div>

            <div class="speciality-card">

                <h2>Spécialités</h2>

                <canvas id="specialityChart"></canvas>

            </div>

        </section>

        <!-- TABLE -->

        <section class="table-section">

            <div class="section-title">

                <h2>Rendez-vous récents</h2>

                <a href="#">Voir tout</a>

            </div>

            <table>

                <thead>

                    <tr>

                        <th>Médecin</th>
                        <th>Date & Heure</th>
                        <th>Statut</th>
                        <th>Actions</th>

                    </tr>

                </thead>

                <tbody id="appointmentTable">

                    <tr>

                        <td>Dr. Sarah Faye</td>

                        <td>24 Oct 2024 - 14:30</td>

                        <td>
                            <span class="badge success">
                                Confirmé
                            </span>
                        </td>

                        <td>

                            <button class="edit-btn">
                                Modifier
                            </button>

                            <button class="delete-btn">
                                Supprimer
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>Dr. Amadou Diallo</td>

                        <td>24 Oct 2024 - 15:15</td>

                        <td>
                            <span class="badge warning">
                                En attente
                            </span>
                        </td>

                        <td>

                            <button class="edit-btn">
                                Modifier
                            </button>

                            <button class="delete-btn">
                                Supprimer
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>Dr. Christian Lopez</td>

                        <td>25 Oct 2024 - 09:00</td>

                        <td>
                            <span class="badge danger">
                                Annulé
                            </span>
                        </td>

                        <td>

                            <button class="edit-btn">
                                Modifier
                            </button>

                            <button class="delete-btn">
                                Supprimer
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </section>

        <!-- BOTTOM -->

        <section class="bottom-grid">

            <!-- DOCTORS -->

            <div class="doctor-section">

                <div class="section-title">

                    <h2>Gestion des Médecins</h2>

                    <a href="#">Tout gérer</a>

                </div>

                <div class="doctor-list">

                    <div class="doctor-card">

                        <img src="{{ asset('images/cardio.png') }}">

                        <div class="doctor-info">

                            <h3>Dr. Aminata Traoré ⭐ 4.9</h3>

                            <p>Cardiologue • Dakar</p>

                            <div class="doctor-bottom">

                                <span class="active-status">
                                    ● Actif
                                </span>

                                <button onclick="showDoctor()">
                                    Détails
                                </button>

                            </div>

                        </div>

                    </div>

                    <div class="doctor-card">

                        <img src="{{ asset('images/pedia.png') }}">

                        <div class="doctor-info">

                            <h3>Dr. Pierre Durand ⭐ 4.8</h3>

                            <p>Pédiatre • Thiès</p>

                            <div class="doctor-bottom">

                                <span class="offline-status">
                                    ● Hors ligne
                                </span>

                                <button onclick="showDoctor()">
                                    Détails
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- CALENDRIER -->

                <div class="calendar-box">

                    <div class="calendar-header">

                        <h4 id="monthName">OCTOBRE 2024</h4>

                        <div>

                            <button class="calendar-nav" id="prevMonth">
                                ‹
                            </button>

                            <button class="calendar-nav" id="nextMonth">
                                ›
                            </button>

                        </div>

                    </div>

                    <div class="calendar-days" id="calendarDays">

                    </div>

                </div>

            </div>

            <!-- ACTIVITE -->

            <div class="activity-section">

                <div class="section-title">

                    <h2>Activité Récente</h2>

                </div>

                <div class="timeline">

                    <div class="timeline-item">

                        <div class="circle blue"></div>

                        <div>

                            <h4>Nouveau médecin inscrit</h4>

                            <small>Il y a 5 min • Dr. Fatou Diome</small>

                        </div>

                    </div>

                    <div class="timeline-item">

                        <div class="circle green"></div>

                        <div>

                            <h4>Paiement reçu</h4>

                            <small>Il y a 22 min • 15 000 FCFA</small>

                        </div>

                    </div>

                    <div class="timeline-item">

                        <div class="circle orange"></div>

                        <div>

                            <h4>Rendez-vous annulé</h4>

                            <small>Il y a 1 h • Patient Moussa Sow</small>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

<script src="{{ asset('js/script.js') }}">

// ============================
// SIDEBAR
// ============================




</script>

</body>
</html>

<style>


*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f4f7fb;
}

.dashboard{
    display:flex;
    min-height:100vh;
}

/* SIDEBAR */

.sidebar{
    width:260px;
    background:#fff;
    padding:20px;
    border-right:1px solid #e5e7eb;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
}

.logo{
    display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:35px;
}

.logo-icon{
    width:50px;
    height:50px;
    background:#2563eb;
    color:#fff;
    border-radius:14px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:22px;
}

.logo h2{
    color:#2563eb;
}

.logo p{
    color:#94a3b8;
    font-size:13px;
}

.menu{
    list-style:none;
}

.menu li{
    margin-bottom:10px;
}

.menu li a{
    text-decoration:none;
    color:#475569;
    display:flex;
    align-items:center;
    gap:12px;
    padding:14px;
    border-radius:12px;
    transition:0.3s;
}

.menu li.active a,
.menu li a:hover{
    background:#2563eb;
    color:#fff;
}

.sidebar-footer{
    background:#f8fafc;
    border-radius:14px;
    padding:12px;
    display:flex;
    align-items:center;
    gap:12px;
}

.sidebar-footer img{
    width:45px;
    height:45px;
    border-radius:50%;
}

/* MAIN */

.main-content{
    flex:1;
    padding:25px;
}

/* TOPBAR */

.topbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.search-box{
    width:420px;
    background:#fff;
    padding:12px 16px;
    border-radius:14px;
    display:flex;
    align-items:center;
    gap:10px;
}

.search-box input{
    border:none;
    outline:none;
    width:100%;
    background:none;
}

.top-icons{
    display:flex;
    align-items:center;
    gap:20px;
}

.notification{
    position:relative;
    cursor:pointer;
    font-size:22px;
}

.notification span{
    position:absolute;
    top:-8px;
    right:-8px;
    width:18px;
    height:18px;
    background:red;
    color:#fff;
    border-radius:50%;
    font-size:11px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.top-icons img{
    width:45px;
    height:45px;
    border-radius:50%;
}

/* WELCOME */

.welcome{
    margin-top:30px;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.welcome h1{
    font-size:32px;
}

.welcome p{
    color:#64748b;
    margin-top:5px;
}

.date-btn{
    border:none;
    background:#fff;
    padding:12px 18px;
    border-radius:12px;
}

/* STATS */

.stats{
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:20px;
    margin-top:25px;
}

.stat-card{
    background:#fff;
    padding:20px;
    border-radius:20px;
    display:flex;
    align-items:center;
    gap:15px;
    transition:0.3s;
}

.clickable-card{
    cursor:pointer;
}

.clickable-card:hover{
    transform:translateY(-5px);
    box-shadow:0 12px 25px rgba(0,0,0,0.08);
}

.stat-icon{
    width:60px;
    height:60px;
    border-radius:16px;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-size:22px;
}

.blue{
    background:#2563eb;
}

.cyan{
    background:#06b6d4;
}

.orange{
    background:#f59e0b;
}

.green{
    background:#22c55e;
}

/* ACTIONS */

.actions-alerts{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    margin-top:25px;
}

.actions-box,
.alerts-box{
    background:#fff;
    padding:20px;
    border-radius:20px;
}

.actions-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:15px;
    margin-top:20px;
}

.action-btn{
    border:none;
    padding:20px;
    border-radius:16px;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
    display:flex;
    flex-direction:column;
    gap:10px;
    align-items:center;
}

.action-btn:hover{
    transform:translateY(-5px);
}

.blue-btn{
    background:#dbeafe;
    color:#2563eb;
}

.cyan-btn{
    background:#cffafe;
    color:#0891b2;
}

.orange-btn{
    background:#ffedd5;
    color:#ea580c;
}

.alert-item{
    padding:14px;
    border-radius:12px;
    margin-top:15px;
    font-size:14px;
    font-weight:500;
}

.yellow{
    background:#fef3c7;
    color:#ca8a04;
}

.blue-alert{
    background:#dbeafe;
    color:#2563eb;
}

.red{
    background:#fee2e2;
    color:#dc2626;
}

/* CHART */

.chart-speciality{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    margin-top:25px;
}

.chart-card,
.speciality-card{
    background:#fff;
    padding:20px;
    border-radius:20px;
}

.section-title{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

#chartFilter{
    border:none;
    background:#f1f5f9;
    padding:10px;
    border-radius:10px;
}

canvas{
    margin-top:20px;
}

/* TABLE */

.table-section{
    background:#fff;
    padding:20px;
    border-radius:20px;
    margin-top:25px;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th{
    background:#f1f5f9;
    padding:15px;
    text-align:left;
}

table td{
    padding:18px 15px;
    border-bottom:1px solid #f1f5f9;
}

.badge{
    padding:6px 12px;
    border-radius:999px;
    font-size:12px;
    font-weight:600;
}

.success{
    background:#dcfce7;
    color:#16a34a;
}

.warning{
    background:#fef3c7;
    color:#ca8a04;
}

.danger{
    background:#fee2e2;
    color:#dc2626;
}

.edit-btn{
    border:none;
    background:#2563eb;
    color:#fff;
    padding:8px 12px;
    border-radius:8px;
    cursor:pointer;
    margin-right:8px;
}

.delete-btn{
    border:none;
    background:#ef4444;
    color:#fff;
    padding:8px 12px;
    border-radius:8px;
    cursor:pointer;
}

/* BOTTOM */

.bottom-grid{
    display:grid;
    grid-template-columns:2fr 1fr;
    gap:20px;
    margin-top:25px;
}

.doctor-section,
.activity-section{
    background:#fff;
    padding:20px;
    border-radius:20px;
}

.doctor-list{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.doctor-card{
    background:#f8fafc;
    border:1px solid #e2e8f0;
    border-radius:16px;
    padding:15px;
    display:flex;
    gap:15px;
    flex:1;
    min-width:260px;
}

.doctor-card img{
    width:70px;
    height:70px;
    border-radius:50%;
}

.doctor-info{
    flex:1;
}

.doctor-info p{
    color:#64748b;
    margin:5px 0 10px;
}

.doctor-bottom{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.doctor-bottom button{
    border:none;
    background:#2563eb;
    color:#fff;
    padding:8px 14px;
    border-radius:10px;
    cursor:pointer;
}

.active-status{
    color:#16a34a;
}

.offline-status{
    color:#64748b;
}

/* CALENDAR */

.calendar-box{
    margin-top:20px;
    background:#f8fafc;
    padding:15px;
    border-radius:16px;
}

.calendar-header{
    display:flex;
    justify-content:space-between;
    margin-bottom:15px;
}

.calendar-nav{
    border:none;
    background:#2563eb;
    color:#fff;
    width:35px;
    height:35px;
    border-radius:8px;
    cursor:pointer;
}

.calendar-days{
    display:grid;
    grid-template-columns:repeat(7,1fr);
    gap:10px;
}

.day{
    text-align:center;
    padding:12px;
    border-radius:10px;
    cursor:pointer;
    transition:0.3s;
}

.day:hover{
    background:#dbeafe;
}

.active-day{
    background:#2563eb;
    color:#fff;
}

/* ACTIVITY */

.timeline{
    display:flex;
    flex-direction:column;
    gap:20px;
}

.timeline-item{
    display:flex;
    gap:12px;
}

.timeline-item small{
    color:#94a3b8;
}

.circle{
    width:14px;
    height:14px;
    border-radius:50%;
    margin-top:5px;
}

/* RESPONSIVE */

@media(max-width:1100px){

    .stats{
        grid-template-columns:repeat(2,1fr);
    }

    .actions-alerts,
    .chart-speciality,
    .bottom-grid{
        grid-template-columns:1fr;
    }

}

@media(max-width:768px){

    .sidebar{
        display:none;
    }

    .stats{
        grid-template-columns:1fr;
    }

    .topbar{
        flex-direction:column;
        gap:15px;
    }

    .search-box{
        width:100%;
    }

    .actions-grid{
        grid-template-columns:1fr;
    }

}


.chart-card{

    position:relative;

    min-height:380px;

}

#appointmentChart{

    width:100%!important;

    height:300px!important;

}

/* ==========================
   GRAPHIQUES RESPONSIVE
========================== */

.chart-card,
.speciality-card{
    background:#fff;
    padding:20px;
    border-radius:20px;
    position:relative;
}

/* Taille ordinateur */
.chart-card{
    height:320px;
}

.speciality-card{
    height:280px;
}

/* Le canvas prend toute la place */
.chart-card canvas,
.speciality-card canvas{
    width:100% !important;
    height:100% !important;
}

/* Tablette */
@media (max-width:992px){

    .chart-card{
        height:280px;
    }

    .speciality-card{
        height:240px;
    }

}

/* Téléphone Android / iPhone */
@media (max-width:768px){

    .chart-card{
        height:240px;
    }

    .speciality-card{
        height:220px;
    }

}

/* Petits téléphones */
@media (max-width:480px){

    .chart-card{
        height:200px;
    }

    .speciality-card{
        height:180px;
    }

}



/* =========================
   RESPONSIVE MOBILE
========================= */

@media screen and (max-width: 768px) {

    .dashboard {
        flex-direction: column;
    }

    .sidebar {
        width: 100%;
        height: auto;
        border-right: none;
        border-bottom: 1px solid #e5e7eb;
        position: sticky;
        top: 0;
        z-index: 1000;
        background: white;
        
    }

    .menu {
        display: flex;
        flex-direction: row;
        overflow-x: auto;
        gap: 10px;
        padding: 10px;
        -webkit-overflow-scrolling: touch;
    }

    .menu li {
        margin-bottom: 0;
        white-space: nowrap;
        flex-shrink: 0;
    }

    /* CONTENU PRINCIPAL */
    .main-content {
        width: 100%;
        padding: 10px;
    }

    /* CARTES DASHBOARD */
    .cards {
        grid-template-columns: 1fr !important;
    }

    /* CHART */
    .chart-card {
        height: 250px;
    }
}



@media screen and (max-width: 1024px) {

    .cards {
        grid-template-columns: repeat(2, 1fr);
    }

    .sidebar {
        width: 200px;
    }
}


* {
    box-sizing: border-box;
}

body {
    margin: 0;
    overflow-x: hidden;
}

</style>
