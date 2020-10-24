<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichaAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ficha_autors', function (Blueprint $table) {
            $table->id();
            $table->text("biografia");
            $table->String("nombre", 60)->unique();
            $table->foreignId("editorial_id")->references("id")->on("editorials");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ficha_autors');
    }
}
