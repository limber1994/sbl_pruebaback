<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSblBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbl_books', function (Blueprint $table) {
            $table->id();
            $table->char('abbreviation', 10);
            $table->integer('quantity');
            $table->string('title', 255)->nullable();
            $table->char('grade', 11);
            $table->string('category', 11);
            $table->year('year');
            $table->string('observation', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sbl_books');
    }
}

