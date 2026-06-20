<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('medecins', function (Blueprint $table) {

            if (!Schema::hasColumn('medecins', 'prenom')) {
                $table->string('prenom')->after('id');
            }

            if (!Schema::hasColumn('medecins', 'nom')) {
                $table->string('nom')->after('prenom');
            }

            if (!Schema::hasColumn('medecins', 'specialite')) {
                $table->string('specialite')->after('nom');
            }

            if (!Schema::hasColumn('medecins', 'age')) {
                $table->integer('age')->after('specialite');
            }

            if (!Schema::hasColumn('medecins', 'image')) {
                $table->string('image')->nullable()->after('age');
            }

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('medecins', function (Blueprint $table) {

            if (Schema::hasColumn('medecins', 'prenom')) {
                $table->dropColumn('prenom');
            }

            if (Schema::hasColumn('medecins', 'nom')) {
                $table->dropColumn('nom');
            }

            if (Schema::hasColumn('medecins', 'specialite')) {
                $table->dropColumn('specialite');
            }

            if (Schema::hasColumn('medecins', 'age')) {
                $table->dropColumn('age');
            }

            if (Schema::hasColumn('medecins', 'image')) {
                $table->dropColumn('image');
            }
        });
    }
};