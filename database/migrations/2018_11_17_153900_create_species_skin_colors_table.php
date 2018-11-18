<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeciesSkinColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('species_skin_colors', function (Blueprint $table) {
          $table->integer('species_id')->unsigned();
          $table->foreign('species_id')->references('id')->on('species');
          $table->integer('skin_colors_id')->unsigned();
          $table->foreign('skin_colors_id')->references('id')->on('skin_colors');
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
        Schema::dropIfExists('species_skin_colors');
    }
}
