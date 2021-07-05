<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorsModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors_models', function (Blueprint $table) {
            $table->id();
            $table->binary("color");
            $table->string("color_name");
            $table->string("color_tag");
            
            $table->binary("color_one");
            $table->binary("color_two");
            $table->string("one_tag");
            $table->string("two_tag");
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
        Schema::dropIfExists('colors_models');
    }
}
