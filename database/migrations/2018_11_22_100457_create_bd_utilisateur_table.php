<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_utilisateur', function (Blueprint $table) {
            $table->unsignedInteger('fk_bd');
            $table->unsignedInteger('fk_utilisateur');
            $table->foreign('fk_bd')->references('bd_id')->on('bd')->onDelete('cascade');
            $table->foreign('fk_utilisateur')->references('utilisateur_id')->on('utilisateur')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bd_utilisateur');
    }
}
