<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();

            // patient (utilisateur connecté)
            $table->foreignId('user_id')
                ->constrained('users')
                ->onDelete('cascade');

            // médecin choisi
            $table->foreignId('medecin_id')
                ->constrained('users')
                ->onDelete('cascade');

            // infos rendez-vous
            $table->string('service');
            $table->date('date');
            $table->time('heure');

            // optionnel
            $table->text('motif')->nullable();

            // statut du paiement / rendez-vous
            $table->enum('status', [
                'en_attente',
                'payé',
                'annulé',
                'terminé'
            ])->default('en_attente');

            // paiement méthode
            $table->enum('methode_paiement', [
                'wave',
                'orange_money'
            ])->nullable();

            // montant
            $table->integer('montant')->default(15500);

            $table->string('reference_paiement')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rendez_vous');
    }
};