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
        Schema::table('vacantes', function (Blueprint $table) {
            $table->text('requisitos');
			$table->string('sueldo');
			$table->string('sexo');
			$table->string('estudios_valorados');
			$table->string('experiencia_requerida');
			$table->string('edad_requerida');
			$table->string('carnet_conducir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vacantes', function (Blueprint $table) {
			$table->dropColumn(['requisitos', 'sueldo', 'sexo', 'estudios_valorados', 'experiencia_requerida',
			'edad_requerida', 'carnet_conducir']);
        });
    }
};
