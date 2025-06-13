<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla de fotos para almacenar imágenes de forma polimórfica
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id(); // id: Identificador único
            $table->string('url'); // url: Ubicación de la imagen, obligatorio
            $table->unsignedBigInteger('imageable_id'); // imageable_id: Id del modelo relacionado
            $table->string('imageable_type'); // imageable_type: Tipo del modelo relacionado (ej. Restaurant)
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
