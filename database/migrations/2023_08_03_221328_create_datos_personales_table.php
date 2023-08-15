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
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id();
			$table->string('nombre');
			$table->string('apellido');
			$table->string('telefono');
			$table->string('dni');
			$table->date('fecha_nacimiento');
			$table->string('sexo');
			$table->text('provincia');
			$table->string('localidad');
			$table->string('direccion');
			$table->string('imagen');
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datos_personales');
    }
};
