<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDimensionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimension_models', function (Blueprint $table) {
            $table->id();
            $table->string('dimension_name', 100);
            $table->string('dimension_text', 100);
            $table->string('dimension_one_text', 100);
            $table->string('dimension_two_text', 100);
            $table->binary('dimension_one_image');
            $table->binary('dimension_two_image');
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
        Schema::dropIfExists('dimension_models');
    }
}
