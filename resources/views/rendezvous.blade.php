<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Prendre RDV - Sama Santé</title>
    <style>
        * {margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Arial;}
        body {background: #f8fafc; padding: 40px;}
        .container {max-width: 900px; margin: auto; background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 40px rgba(0,0,0,0.08);}
        h2 {color: #0f172a; margin-bottom: 30px; text-align: center;}
        .grid-2 {display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 30px;}
        label {display: block; margin-bottom: 8px; font-weight: 600; color: #334155; font-size: 14px;}
        input, select {width: 100%; padding: 12px; border: 2px solid #e2e8f0; border-radius: 10px; font-size: 15px;}
        input:focus, select:focus {border-color: #2563eb; outline: none;}
        
        .doctors {display: flex; gap: 15px; margin-bottom: 30px;}
        .doctor-card {border: 2px solid #e2e8f0; padding: 15px; border-radius: 12px; flex: 1; cursor: pointer; text-align: center;}
        .doctor-card:hover {border-color: #2563eb;}
        .doctor-card img {width: 60px; height: 60px; border-radius: 50%; margin-bottom: 8px;}
        
        .payment {margin: 30px 0;}
        .payment label {display: inline-flex; align-items: center; gap: 8px; margin-right: 30px; font-weight: normal;}
        
        .total-box {background: #eff6ff; padding: 25px; border-radius: 15px; margin-top: 30px;}
        .total-line {display: flex; justify-content: space-between; margin: 8px 0; color: #475569;}
        .total-final {display: flex; justify-content: space-between; font-weight: bold; font-size: 18px; color: #0f172a; border-top: 2px solid #dbeafe; padding-top: 12px; margin-top: 12px;}
        
        .btn-pay {background: #2563eb; color: white; padding: 16px; width: 100%; border: none; border-radius: 12px; font-size: 16px; font-weight: bold; cursor: pointer; margin-top: 20px;}
        .btn-pay:hover {background: #1d4ed8;}
        
        .success {background: #dcfce7; color: #166534; padding: 15px; border-radius: 10px; margin-bottom: 20px; text-align: center;}
    </style>
</head>
<body>
    <div class="container">
        <h2>Finalisez votre réservation</h2>
        
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        
        <form method="POST" action="/rendez-vous">
            @csrf
            
            <label>Quel service recherchez-vous ?</label>
            <select name="service" required>
                <option value="">-- Choisissez --</option>
                <option>Consultation générale</option>
                <option>Pédiatrie</option>
                <option>Dermatologie</option>
                <option>Gynécologie</option>
            </select>
            
            <label>Choisissez votre médecin</label>
            <div class="doctors">
                <div class="doctor-card">
                    <img src="https://i.pravatar.cc/60?u=1" alt="">
                    <div>Dr. Moustapha Diop</div>
                    <small>Cardiologue</small>
                </div>
                <div class="doctor-card">
                    <img src="https://i.pravatar.cc/60?u=2" alt="">
                    <div>Dr. Awa Seck</div>
                    <small>Pédiatre</small>
                </div>
            </div>
            
            <div class="grid-2">
                <div>
                    <label>Nom complet du patient</label>
                    <input type="text" name="nom" required>
                    
                    <label>Téléphone</label>
                    <input type="tel" name="telephone" placeholder="+221 77 XXX XX" required>
                </div>
                
                <div>
                    <label>Date de consultation</label>
                    <input type="date" name="date" required>
                    
                    <label>Heure</label>
                    <input type="time" name="heure" required>
                </div>
            </div>
            
            <div class="payment">
                <label>Méthode de paiement</label><br>
                <label><input type="radio" name="paiement" value="wave" checked> Wave</label>
                <label><input type="radio" name="paiement" value="orange"> Orange Money</label>
            </div>
            
            <div class="total-box">
                <div class="total-line">
                    <span>Consultation</span>
                    <span>10.000 FCFA</span>
                </div>
                <div class="total-line">
                    <span>Frais de service</span>
                    <span>500 FCFA</span>
                </div>
                <div class="total-final">
                    <span>Total à payer</span>
                    <span>10.500 FCFA</span>
                </div>
                <button type="submit" class="btn-pay">Payer maintenant</button>
            </div>
        </form>
    </div>
</body>
</html>