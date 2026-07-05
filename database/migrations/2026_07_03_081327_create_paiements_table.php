<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('paiements', function (Blueprint $table) {

            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('rendez_vous_id')
                ->constrained('rendez_vous')
                ->cascadeOnDelete();

            $table->string('operateur');

            $table->decimal('montant', 10, 2);

            // 💳 statut paiement (LOGIQUE BANCAIRE)
            $table->enum('statut', [
                'en_attente',
                'payé',
                'echoue'
            ])->default('en_attente');

            $table->string('reference')->nullable();

            $table->timestamp('date_paiement')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};