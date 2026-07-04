<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécute la migration.
     */
    public function up(): void
    {
        Schema::create('paiements', function (Blueprint $table) {

            $table->id();

            // Utilisateur ayant effectué le paiement
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            // Rendez-vous concerné
            $table->foreignId('rendez_vous_id')
                ->constrained('rendez_vous')
                ->cascadeOnDelete();

            // Opérateur de paiement
            $table->string('operateur');

            // Montant payé
            $table->decimal('montant', 10, 2);

            // Statut du paiement
            $table->enum('statut', [
                'en_attente',
                'en_cours',
                'paye',
                'echoue'
            ])->default('en_attente');

            // Référence de la transaction
            $table->string('reference')->nullable();

            // Date et heure du paiement
            $table->timestamp('date_paiement')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Annule la migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};