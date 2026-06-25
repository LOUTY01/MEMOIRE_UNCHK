<!DOCTYPE html>
<html lang="fr">
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Sama Santé - RDV</title>
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
  
  <footer class="bg-blue-600 text-white py-8 mt-12">
    <div class="max-w-7xl mx-auto px-4 text-center">© 2024 Sama Santé</div>
  </footer>

</body>
</html>