<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdAuteurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_auteur', function (Blueprint $table) {
            $table->unsignedInteger('fk_bd');
            $table->unsignedInteger('fk_auteur');
            $table->foreign('fk_bd')->references('bd_id')->on('bd')->onDelete('cascade');
            $table->foreign('fk_auteur')->references('auteur_id')->on('auteur')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bd_auteur');
    }
}
