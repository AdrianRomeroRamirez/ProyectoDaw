<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->String("isbn", 13)->unique();
            $table->String("titulo", 40);
            $table->float("precio");
            $table->String("portada", 150);
            $table->text("sinopsis");
            $table->String("categoria", 20);
            $table->foreignId("editorial_id")->references("id")->on("editorials");
            $table->foreignId("ficha_autor_id")->references("id")->on("ficha_autors");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
