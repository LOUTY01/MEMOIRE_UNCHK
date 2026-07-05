<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('medecins', function (Blueprint $table) {

            $table->string('prenom')->after('id');
            $table->string('nom')->after('prenom');
            $table->string('specialite')->after('nom');
            $table->integer('age')->nullable()->after('specialite');
            $table->string('image')->nullable()->after('age');
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