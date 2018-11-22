<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_categorie', function (Blueprint $table) {
            $table->unsignedInteger('fk_bd');
            $table->unsignedInteger('fk_categorie');
            $table->foreign('fk_bd')->references('bd_id')->on('bd')->onDelete('cascade');
            $table->foreign('fk_categorie')->references('categorie_id')->on('categorie')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bd_categorie');
    }
}
