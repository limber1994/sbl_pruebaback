<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSblContentbankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbl_contentbank', function (Blueprint $table) {
            // Identificador de CONTENIDO DE BANCO
            $table->id(); // AUTO_INCREMENT y PRIMARY KEY
            // Llave foránea para identificar libro
            $table->unsignedBigInteger('BookId');
            // Estado del LIBRO
            $table->enum('state', ['Normal', 'Perdido', 'Dañado'])->default('Normal')->charset('utf8mb4');

            // Timestamps
            $table->timestamps();

            // Llave foránea
            $table->foreign('BookId')->references('Id')->on('sbl_books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sbl_contentbank');
    }
}
