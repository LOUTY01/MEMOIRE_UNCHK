<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('medecins', function (Blueprint $table) {
            $table->string('prenom')->nullable();
            $table->string('nom')->nullable();
            $table->string('specialite')->nullable();
            $table->integer('age')->nullable();
            $table->string('image')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('medecins', function (Blueprint $table) {
            $table->dropColumn([
                'prenom',
                'nom',
                'specialite',
                'age',
                'image'
            ]);
        });
    }
};