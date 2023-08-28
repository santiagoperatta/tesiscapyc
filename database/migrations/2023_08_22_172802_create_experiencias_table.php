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
        Schema::create('experiencias', function (Blueprint $table) {
            $table->id();
			$table->string('empresa');
			$table->foreignId('categoria_id')->constrained()->onDelete('cascade');
			$table->string('puesto');
			$table->string('descripcion');
			$table->date('fecha_inicio_experiencia');
			$table->date('fecha_fin_experiencia');
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiencias');
    }
};
