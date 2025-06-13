<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla de reseñas para que los usuarios valoren restaurantes
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id(); // id: Identificador único
            $table->tinyInteger('rating'); // rating: Entero entre 1 y 5, obligatorio
            $table->text('comment')->nullable(); // comment: Comentario opcional
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade'); // foreign: user_id -> users.id, cascade on delete
            $table->foreignId('restaurant_id')
                  ->constrained()
                  ->onDelete('cascade'); // foreign: restaurant_id -> restaurants.id, cascade on delete
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
