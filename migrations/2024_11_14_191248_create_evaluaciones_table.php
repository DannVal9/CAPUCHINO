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
        Schema::create(table:'evaluaciones', callback: function (Blueprint $table): void {
            $table->id(column:'id_evaluacion');
            $table->unsignedBigInteger('id_curso');
            $table->string(column:'tipo_evaluacion', length: 50);
            $table->date(column:'fecha_evaluacion');
            $table->decimal('valor_evaluacion', 3, 1);
            // Definir la llave foránea
            $table->foreign('id_curso')->references('id_curso')->on('cursos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluaciones');
    }
};
