<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Tabla de usuarios que almacena los datos básicos de cada usuario
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id: Identificador único
            $table->string('name'); // name: Nombre del usuario, obligatorio
            $table->string('email')->unique(); // email: Correo único, obligatorio
            $table->string('password'); // password: Contraseña, obligatoria
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
