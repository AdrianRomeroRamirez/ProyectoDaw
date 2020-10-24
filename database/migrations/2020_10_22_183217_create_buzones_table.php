<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuzonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buzons', function (Blueprint $table) {
            $table->id();
            $table->foreignId("editorial_id")->references("id")->on("editorials");
            $table->foreignId("libro_id")->references("id")->on("libros");
            $table->foreignId("registrado_id")->references("id")->on("registrados");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buzons');
    }
}
