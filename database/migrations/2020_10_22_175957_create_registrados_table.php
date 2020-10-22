<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrados', function (Blueprint $table) {
            $table->id();
            $table->String("nom_usuario", 20)->unique();
            $table->foreignId("usuario_id")->references("id")->on("usuarios");
            $table->String("direccion", 60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrados');
    }
}
