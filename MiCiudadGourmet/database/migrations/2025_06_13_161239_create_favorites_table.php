<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla pivote para favoritos que relaciona usuarios y restaurantes
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade'); // foreign: user_id -> users.id, cascade on delete
            $table->foreignId('restaurant_id')
                  ->constrained()
                  ->onDelete('cascade'); // foreign: restaurant_id -> restaurants.id, cascade on delete
            $table->primary(['user_id', 'restaurant_id']); // Clave primaria compuesta para evitar duplicados
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('favorites');
    }
};
