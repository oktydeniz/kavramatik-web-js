<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShapeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shape_models', function (Blueprint $table) {
            $table->id();
            $table->string('shape_name', 100);
            $table->string('shape_text', 100);
            $table->binary('shape_image');
            $table->string('shape_two_text', 100)->nullable();
            $table->binary('shape_two_image')->nullable();
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
        Schema::dropIfExists('shape_models');
    }
}
