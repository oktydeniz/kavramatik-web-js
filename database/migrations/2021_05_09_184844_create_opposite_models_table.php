<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOppositeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opposite_models', function (Blueprint $table) {
            $table->id();
            $table->string('opposite_name',100);
            $table->string('opposite_one_image_text',100);
            $table->string('opposite_two_image_text',100);
            $table->binary('opposite_one_image');
            $table->binary('opposite_two_image');
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
        Schema::dropIfExists('opposite_models');
    }
}
