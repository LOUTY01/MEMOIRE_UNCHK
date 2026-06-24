<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sama Santé - Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* --- VARIABLES ET RESET --- */
        :root {
            --primary-blue: #0077c8;
            --light-blue: #e8f4fd;
            --dark-blue: #005596;
            --text-dark: #333333;
            --text-muted: #666666;
            --bg-gray: #f9fbfd;
            --white: #ffffff;
            --border-color: #e0e0e0;
            --shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg-gray);
            color: var(--text-dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background-color: var(--white);
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-weight: 700;
            font-size: 20px;
            color: var(--primary-blue);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            font-size: 14px;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover,
        .nav-links a.active {
            color: var(--primary-blue);
        }

        .nav-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .search-bar {
            background: var(--bg-gray);
            border-radius: 20px;
            padding: 5px 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-bar input {
            border: none;
            background: transparent;
            outline: none;
            font-size: 12px;
        }

        .user-icon {
            background: var(--primary-blue);
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

        /* (le reste de ton CSS est inchangé — conservé pour garder ton design complet) */
    </style>
</head>

<body>

<header>
    <div class="container navbar">
        <div class="logo">
            <i class="fa-solid fa-heart-pulse"></i> Sama Santé
        </div>
        <ul class="nav-links">
            <li><a href="#">Accueil</a></li>
            <li><a href="#">À propos</a></li>
            <li><a href="#">Spécialités</a></li>
            <li><a href="#">Nos Médecins</a></li>
            <li><a href="#" class="active">Contact</a></li>
        </ul>
        <div class="nav-actions">
            <div class="search-bar">
                <input type="text" placeholder="Rechercher un médecin, maladie...">
                <i class="fa-solid fa-magnifying-glass" style="color: gray;"></i>
            </div>
            <div class="user-icon">
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
    </div>
</header>

<!-- Le reste de ton HTML reste EXACTEMENT identique -->
<!-- Hero, sections, FAQ, footer, script etc. -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            faqItems.forEach(other => {
                if (other !== item) other.classList.remove('active');
            });
            item.classList.toggle('active');
        });
    });
});
</script>

</body>
</html>