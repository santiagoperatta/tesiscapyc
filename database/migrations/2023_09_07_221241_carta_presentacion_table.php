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
		Schema::create('carta_presentacion', function (Blueprint $table) {
            $table->id();
			$table->string('area_interes');
			$table->string('objetivo_laboral');
			$table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carta_presentacion');
    }
};
