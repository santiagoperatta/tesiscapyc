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
        Schema::create('estudios', function (Blueprint $table) {
            $table->id();
			$table->string('titulo_carrera');
			$table->string('tipo_estudio');
			$table->string('estado_estudio');
			$table->string('institucion');
			$table->date('fecha_inicio_estudio');
			$table->date('fecha_fin_estudio');
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudios');
    }
};
