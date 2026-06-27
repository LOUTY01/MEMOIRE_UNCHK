<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sama Santé – Réservez votre consultation</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@700;800&display=swap" rel="stylesheet">
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --blue: #1565C0;
    --blue-light: #1E88E5;
    --blue-pale: #E3F2FD;
    --accent: #29B6F6;
    --orange: #FF6D00;
    --green: #2E7D32;
    --text: #1A1A2E;
    --muted: #6B7280;
    --border: #E5E7EB;
    --bg: #F8FAFC;
    --white: #ffffff;
    --star: #FFC107;
    --radius: 12px;
  }

  body { font-family: 'Inter', sans-serif; color: var(--text); background: var(--white); font-size: 15px; line-height: 1.6; }

  /* ── NAV ── */
  nav {
    display: flex; align-items: center; justify-content: space-between;
    padding: 14px 60px; background: var(--white);
    box-shadow: 0 1px 4px rgba(0,0,0,.06); position: sticky; top: 0; z-index: 100;
  }
  .logo { font-family: 'Poppins', sans-serif; font-weight: 800; font-size: 20px; color: var(--blue); }
  .logo span { color: var(--accent); }
  .nav-links { display: flex; gap: 32px; list-style: none; }
  .nav-links a { text-decoration: none; color: var(--text); font-size: 14px; font-weight: 500; }
  .nav-links a.active { color: var(--blue); border-bottom: 2px solid var(--blue); padding-bottom: 2px; }
  .nav-right { display: flex; align-items: center; gap: 16px; }
  .nav-search { border: 1px solid var(--border); border-radius: 20px; padding: 6px 14px; font-size: 13px; color: var(--muted); width: 180px; }
  .nav-icon { width: 32px; height: 32px; background: var(--blue-pale); border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; }

  /* ── HERO ── */
  .hero {
    position: relative; min-height: 420px; overflow: hidden; border-radius: 0 50px 50px 0;
    background: linear-gradient(to right, rgba(227,242,253,0.93) 0%, rgba(227,242,253,0.75) 45%, transparent 75%), url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAsYAAAHXCAYAAAC/CpwWAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAP+lSURBVHhe7P3rlyzZdR8G/s4jIvJRde/tdwMgIIIUjTGlZVFaM2vN8pLmr9B/Mf7i+WTPGi9y7LHMpRlZlmxRkiWalAlJBklQEkHKImWKpCjoRREACYAE2ECj8exGP+6tR2bG6zzmw977xMnIqKqsulW3b3fnr+65mRlx4rziPH6xY5+9VQgh4gkixogYIxQiAM9HNQBAQQEpyFf+fg3EuF0lpQDEAEQg0n/0KXEjnY+ByhMjnY0hpLRijFBKQ2sFbQygDZRS0FoDynA+aifvKVDdt+OFELZ+K6jUDIJx2jFEhBigYkQIHjF6xBAQfA/nHULwCF0H5xyc6xFCjxg81TMCiJ7S5HxiiHDBw3uPtuvQdi2apkXd1DjZbHBWNzjftPBRQWkFpRSsMTCmgDIWRhtovl8hBoQQ4foefd+jbVvUTYOua9D3VKa+79F1PZqmxvn5Cuv1Gpv1Gut1i/Vmg3qzQQgBSikYY1BWJRbzBZbLBY6OllgeLbFcHmG5WKCqKhRlibIooI0GIuCig/ce3jn43sGHAIQIxIgQAiIiNnWNTV1jtVphs66x2WzQtB2aukHf9wjBw1qDalZhNptjsZhhPp+hqipUZYmyKlFVJebWwhqD0hoU1sBqBaM1rFbUu7nf51CK2lC+A/Rbc9umAAWlNf8GogL1RQxx6TvFgaK+I/0zT0trTcdA/VYr+p2O85jTSnN/p+u10kBeJqXoXmsNpQy0pnw15y/nqTwa4PQoSBo61Rlq6FN52+S/x58yRrbiyVwiaYLabHx9DiXjeAtDOhddG0H3QrDPmJ3CON18froIWmkovVuXHFN5Tx3LoQCoUZSrrplC5DngsisVAD1usAnQ3KsQYkQMgftMHmP8+6IyX53XeF5+slAAdueJy0BRp+IP/X7cT6egRjQgTsxXU9gnzk7/noDU47L0xumM4061BV2zPQeMIelcXue4k/ZVmEprpwQ81vMyjDvzVL2uhCI2dSVGZSQ6OGrXrV+79donnxiBGLc5zj5QULvtcyWung+uSmW8GhzwAQR1Wu4s8jmCEAQZbvnv9J1mHx6UFwzMGDk/6ey7udHDS0wDYtypwR2dLuc4ck3++30Aui9Zvd4f1TrgAIBH/5VBAT5GIsY8PwT+HWJEgMwpQ5jGdsrDmHp/zRkHHHDA4+FAjA9Iq8lAMMcRBgxP3kKE0xnhxEOc8WMbL0lp5ZI1aoysHJcuVmmhlCoM6V68OL7XIIt+vqgfcMB7HxFEei8LSNJ86vfKaAp6CFreNmRhP+Rj6vJ574ADDvjg4KkixoPkcZJTPQFIpvln/1...');
  }
</style>
</head>
<body>

  </body>
</html>