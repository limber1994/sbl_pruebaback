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
            $table->integer('Id')->primary();
            $table->integer('BookId')->unsigned();
            $table->enum('state', ['Normal', 'Perdido', 'Dañado'])->default('Normal');
            $table->foreign('BookId')->references('Id')->on('sbl_books');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
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
