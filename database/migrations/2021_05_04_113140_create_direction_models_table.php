<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direction_models', function (Blueprint $table) {
            $table->id();
            $table->string('direction_name', 100);
            $table->string('direction_text', 100);
            $table->binary('direction_image');
            $table->binary('direction_two')->nullable();
            $table->string('direction_two_text', 100)->nullable();
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
        Schema::dropIfExists('direction_models');
    }
}
