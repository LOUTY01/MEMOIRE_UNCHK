<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sama Santé - Support Rapide & Services</title>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { font-family: 'Segoe UI', Arial, sans-serif; color: #333; background: #fff; }

  .support-section {
    padding: 50px 40px 40px;
    text-align: center;
    background: #fff;
  }
  .support-section h2 {
    color: #2a7de1;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 8px;
  }
  .support-section .subtitle {
    color: #555;
    font-size: 13px;
    margin-bottom: 36px;
  }
  .cards-grid {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
    max-width: 900px;
    margin: 0 auto;
  }
  .card {
    background: #fff;
    border: 1px solid #e0e8f5;
    border-radius: 12px;
    padding: 24px 20px 20px;
    width: 190px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(42,125,225,0.07);
  }
  .card-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 14px;
    background: #eaf2ff;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .card-icon svg { width: 24px; height: 24px; }
  .card h3 { font-size: 14px; font-weight: 700; color: #1a1a2e; margin-bottom: 6px; }
  .card p { font-size: 11.5px; color: #777; line-height: 1.5; }

  .faq-section {
    padding: 48px 40px;
    max-width: 760px;
    margin: 0 auto;
    text-align: center;
  }
  .faq-section h2 { color: #2a7de1; font-size: 22px; font-weight: 700; margin-bottom: 28px; }
  .faq-item {
    border: 1px solid #e0e8f5;
    border-radius: 10px;
    margin-bottom: 12px;
    text-align: left;
  }
  .faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 20px;
    font-size: 14px;
    color: #1a1a2e;
    cursor: pointer;
    user-select: none;
  }
  .faq-question .arrow { font-size: 18px; color: #888; transition: transform 0.2s; }
  .faq-item.open .faq-question .arrow { transform: rotate(180deg); }
  .faq-answer {
    display: none;
    padding: 0 20px 16px;
    font-size: 13px;
    color: #555;
    line-height: 1.6;
  }
  .faq-item.open .faq-answer { display: block; }

  .testimonials-section { background: #f5f8ff; padding: 40px; overflow: hidden; }
  .testimonials-section h2 { font-size: 18px; font-weight: 700; color: #1a1a2e; margin-bottom: 24px; }
  .testimonials-track {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
  .testimonials-track::-webkit-scrollbar { display: none; }
  .testimonial-card {
    background: #fff;
    border-radius: 12px;
    padding: 20px;
    min-width: 260px;
    max-width: 280px;
    flex-shrink: 0;
    box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    position: relative;
  }
  .testimonial-card .quote-icon {
    position: absolute;
    top: 14px; right: 16px;
    font-size: 32px; color: #dde8fa;
    font-family: Georgia, serif; line-height: 1;
  }
  .testimonial-header { display: flex; align-items: center; gap: 12px; margin-bottom: 14px; }
  .avatar-placeholder {
    width: 42px; height: 42px; border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    font-size: 16px; font-weight: 700; color: #fff; flex-shrink: 0;
  }
  .testimonial-name { font-size: 13.5px; font-weight: 700; color: #1a1a2e; }
  .testimonial-role { font-size: 11.5px; color: #888; }
  .stars { color: #f5c518; font-size: 13px; margin-bottom: 10px; }
  .testimonial-text { font-size: 12.5px; color: #555; line-height: 1.6; font-style: italic; }

  .cta-section {
    background: linear-gradient(135deg, #2a7de1 0%, #1a5cb8 100%);
    padding: 60px 40px;
    text-align: center;
    color: #fff;
  }
  .cta-section h2 { font-size: 28px; font-weight: 800; line-height: 1.3; margin-bottom: 14px; }
  .cta-section p { font-size: 14px; opacity: 0.85; max-width: 480px; margin: 0 auto 28px; line-height: 1.6; }
  .cta-btn {
    display: inline-flex; align-items: center; gap: 10px;
    background: #fff; color: #2a7de1;
    font-size: 15px; font-weight: 700;
    padding: 14px 30px; border-radius: 50px;
    border: none; cursor: pointer; text-decoration: none;
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
  }

  footer {
    background: #1a2035; color: #aab4c8;
    padding: 48px 60px 32px;
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 40px;
  }
  .footer-brand h3 { color: #fff; font-size: 18px; font-weight: 800; margin-bottom: 10px; }
  .footer-brand p { font-size: 12px; line-height: 1.7; color: #8890a4; }
  footer h4 { color: #fff; font-size: 13.5px; font-weight: 700; margin-bottom: 14px; }
  footer ul { list-style: none; display: flex; flex-direction: column; gap: 8px; }
  footer ul li a { color: #8890a4; text-decoration: none; font-size: 12.5px; }
  .footer-contact li { font-size: 12.5px; color: #8890a4; margin-bottom: 8px; }
  .social-icons { display: flex; gap: 10px; margin-top: 14px; }
  .social-icon {
    width: 32px; height: 32px; border-radius: 50%;
    background: #2a3350;
    display: flex; align-items: center; justify-content: center; cursor: pointer;
  }
  .social-icon svg { width: 16px; height: 16px; fill: #aab4c8; }
</style>
</head>
<body>

<!-- SUPPORT RAPIDE -->
<section class="support-section">
  <h2>Support Rapide &amp; Services</h2>
  <p class="subtitle">Accédez directement aux outils les plus demandées pour gagner du temps.</p>
  <div class="cards-grid">
    <div class="card">
      <div class="card-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2a7de1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
        </svg>
      </div>
      <h3>Réservation</h3>
      <p>Prenez rendez-vous en ligne avec un spécialiste.</p>
    </div>
    <div class="card">
      <div class="card-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2a7de1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/>
        </svg>
      </div>
      <h3>Wave / Orange</h3>
      <p>Réglez vos consultations via mobile money instantanément.</p>
    </div>
    <div class="card">
      <div class="card-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2a7de1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="3" y="3" width="18" height="18" rx="2"/><path d="M7 7h3v3H7zM14 7h3v3h-3zM7 14h3v3H7zM14 14h3v3h-3z"/>
        </svg>
      </div>
      <h3>Tickets QR</h3>
      <p>Obtenez vos titres et dossiers via code QR sécurisé.</p>
    </div>
    <div class="card">
      <div class="card-icon">
        <svg viewBox="0 0 24 24" fill="none" stroke="#2a7de1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>
        </svg>
      </div>
      <h3>Suivi File</h3>
      <p>Consultez votre position dans la file d'attente en direct.</p>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="faq-section">
  <h2>Questions Fréquentes</h2>
  <div class="faq-item open">
    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
      Comment payer avec Wave ou Orange Money ?
      <span class="arrow">▾</span>
    </div>
    <div class="faq-answer">Vous pouvez payer via Wave ou Orange Money en utilisant le numéro marchand disponible sur votre ticket de rendez-vous.</div>
  </div>
  <div class="faq-item">
    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
      Où trouver mon ticket QR pour la consultation ?
      <span class="arrow">▾</span>
    </div>
    <div class="faq-answer">Votre ticket QR est disponible dans votre espace personnel, section "Mes rendez-vous".</div>
  </div>
  <div class="faq-item">
    <div class="faq-question" onclick="this.parentElement.classList.toggle('open')">
      Puis-je annuler un rendez-vous en ligne ?
      <span class="arrow">▾</span>
    </div>
    <div class="faq-answer">Oui, vous pouvez annuler votre rendez-vous jusqu'à 2 heures avant la consultation depuis votre espace patient.</div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section">
  <h2>Ils nous font confiance</h2>
  <div class="testimonials-track">
    <div class="testimonial-card">
      <span class="quote-icon">"</span>
      <div class="testimonial-header">
        <div class="avatar-placeholder" style="background:#c47c5a;">M</div>
        <div><div class="testimonial-name">Moussa Fall</div><div class="testimonial-role">Patient</div></div>
      </div>
      <div class="stars">★★★★★</div>
      <p class="testimonial-text">« Le support client est incroyable. J'avais un souci de paiement par Wave et ils ont réglé ça en moins de 5 minutes via le chat. »</p>
    </div>
    <div class="testimonial-card">
      <span class="quote-icon">"</span>
      <div class="testimonial-header">
        <div class="avatar-placeholder" style="background:#d4a84b;">A</div>
        <div><div class="testimonial-name">Awa Ndiaye</div><div class="testimonial-role">Patiente</div></div>
      </div>
      <div class="stars">★★★★★</div>
      <p class="testimonial-text">« Très pratique d'information. Le système de ticket QR facilite vraiment le passage à l'hôpital. Plus de longues files d'attente ! »</p>
    </div>
    <div class="testimonial-card">
      <span class="quote-icon">"</span>
      <div class="testimonial-header">
        <div class="avatar-placeholder" style="background:#3a8c5c;">O</div>
        <div><div class="testimonial-name">Omar Sylla</div><div class="testimonial-role">Patient</div></div>
      </div>
      <div class="stars">★★★★★</div>
      <p class="testimonial-text">« En tant que professionnel, j'apprécie la rigueur technique de Sama Santé. Leur support est à la hauteur de nos exigences médicales. »</p>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <h2>Besoin d'aide ou<br>d'informations ?</h2>
  <p>Nos conseillers sont disponibles par chat en direct pour répondre à toutes vos questions médicales et administratives.</p>
  <a class="cta-btn" href="tel:1515">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#2a7de1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.67 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.58 1.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.82a16 16 0 0 0 6 6l1.62-1.62a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.03z"/>
    </svg>
    Appeler le 1515
  </a>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-brand">
    <h3>Sama Santé</h3>
    <p>Sama Santé est une plateforme de gestion de la santé en ligne au Sénégal, facilitant l'accès aux soins et à l'information médicale.</p>
  </div>
  <div>
    <h4>Navigation</h4>
    <ul>
      <li><a href="#">Accueil</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">À propos</a></li>
      <li><a href="#">Contacts</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </div>
  <div>
    <h4>Services</h4>
    <ul>
      <li><a href="#">Consultation générale</a></li>
      <li><a href="#">Prise de rendez-vous</a></li>
      <li><a href="#">Suivi de la file</a></li>
      <li><a href="#">Services d'urgence</a></li>
    </ul>
  </div>
  <div>
    <h4>Contact</h4>
    <ul class="footer-contact">
      <li>📞 +221 77 123 45 67</li>
      <li>✉ contact@samasante.sn</li>
      <li>📍 Dakar, Sénégal</li>
    </ul>
    <div class="social-icons">
      <div class="social-icon"><svg viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg></div>
      <div class="social-icon"><svg viewBox="0 0 24 24"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.43.36a9 9 0 0 1-2.88 1.1 4.52 4.52 0 0 0-7.69 4.12A12.82 12.82 0 0 1 3 2s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/></svg></div>
      <div class="social-icon"><svg viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-4 0v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg></div>
      <div class="social-icon"><svg viewBox="0 0 24 24"><path d="M22.54 6.42A2.78 2.78 0 0 0 20.6 4.47C18.88 4 12 4 12 4s-6.88 0-8.6.47A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.4 19.53C5.12 20 12 20 12 20s6.88 0 8.6-.47a2.78 2.78 0 0 0 1.94-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" style="fill:#1a2035"/></svg></div>
    </div>
  </div>
</footer>

</body>
</html>
