<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenseModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sense_models', function (Blueprint $table) {
            $table->id();
            $table->string('sense_name',100);
            $table->string('sense_one_image_text',100);
            $table->string('sense_two_image_text',100);
            $table->binary('sense_one_image');
            $table->binary('sense_two_image');
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
        Schema::dropIfExists('sense_models');
    }
}
