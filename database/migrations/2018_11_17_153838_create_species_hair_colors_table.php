<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesHairColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species_hair_colors', function (Blueprint $table) {
            $table->integer('species_id')->unsigned();
            $table->foreign('species_id')->references('id')->on('species');
            $table->integer('hair_color_id')->unsigned();
            $table->foreign('hair_color_id')->references('id')->on('hair_colors');
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
        Schema::dropIfExists('species_hair_colors');
    }
}
