<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd', function (Blueprint $table) {
            $table->increments('bd_id');
            $table->char('bd_titre');
            $table->unsignedInteger('fk_collection');
            $table->foreign('fk_collection')->references('collection_id')->on('collection')->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bd');
    }
}
