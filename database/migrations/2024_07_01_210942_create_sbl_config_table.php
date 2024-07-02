<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSblConfigTable extends Migration
{
    public function up()
    {
        Schema::create('sbl_config', function (Blueprint $table) {
            $table->id(); // Esto creará una columna `id` autoincremental como clave primaria
            $table->year('period');
            $table->date('start_schol_year');
            $table->string('institute_name')->nullable();
            $table->string('region')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('modular_code', 11);
            $table->integer('phone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sbl_config');
    }
}
