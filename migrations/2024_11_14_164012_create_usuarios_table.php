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
        Schema::create(table:'usuarios', callback: function (Blueprint $table): void {
            $table->id(column:'id_usuario');
            $table->string(column:'nombre_usuario', length: 100);
            $table->string(column:'identificacion', length: 50);
            $table->string(column:'correo', length: 100);
            $table->string(column:'contraseña', length: 255);
            $table->unsignedBigInteger('id_rol');
            $table->tinyInteger(column:'estado');
            // Definir la llave foránea
            $table->foreign('id_rol')->references('id_rol')->on('roles')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
