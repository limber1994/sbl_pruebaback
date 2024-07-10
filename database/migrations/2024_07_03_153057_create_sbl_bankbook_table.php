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
        Schema::create('sbl_bankbooks', function (Blueprint $table) {
            // Identificador de BANCO DE LIBRO
            $table->id(); // AUTO_INCREMENT y PRIMARY KEY
            // Llave foránea para identificar a qué banco de contenido pertenece
            $table->unsignedBigInteger('BankId');
            // Cantidad de libros en el BANCO (assumed this should be 'studentId' based on your description)
            $table->integer('studentId');
            // Observación del contenido del BANCO
            $table->string('observation', 255)->charset('utf8mb4');
            // Grado al que pertenece el banco
            $table->string('Grado',255)->charset('utf8mb4');
            // Timestamps
            $table->timestamps();

            // Llave foránea
            $table->foreign('BankId')->references('Id')->on('sbl_contentbank')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sbl_bankbooks');
    }
};
