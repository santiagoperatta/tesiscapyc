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
		Schema::create('situacion_laboral', function (Blueprint $table) {
            $table->id();
			$table->string('situacion_laboral');
			$table->string('pretension_salarial');
			$table->boolean('cambiar_residencia')->default(false);
			$table->boolean('viajar')->default(false);
			$table->boolean('vehiculo')->default(false);
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('situacion_laboral');
    }
};
