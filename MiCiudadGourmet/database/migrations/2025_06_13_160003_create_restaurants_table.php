<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla de restaurantes para almacenar la información de cada restaurante
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id(); // id: Identificador único
            $table->string('name'); // name: Nombre del restaurante, obligatorio
            $table->string('address'); // address: Dirección, obligatorio
            $table->string('phone')->nullable(); // phone: Teléfono, opcional
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade'); // foreign: user_id -> users.id, cascade on delete
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
