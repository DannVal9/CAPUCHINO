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
        Schema::create(table:'cursos', callback: function (Blueprint $table): void {
            $table->id(column:'id_curso');
            $table->string(column:'nombre_curso', length: 100);
            $table->unsignedBigInteger('id_usuario');
            $table->text(column:'descripcion');
            // Definir la llave foránea
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
