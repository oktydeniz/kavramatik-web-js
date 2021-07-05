<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuantitiyModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quantitiy_models', function (Blueprint $table) {
            $table->id();
            $table->string('quantitiy_name', 100);
            $table->string('quantitiy_text', 100);
            $table->string('quantitiy_one_text', 100);
            $table->string('quantitiy_two_text', 100);
            $table->binary('quantitiy_one_image');
            $table->binary('quantitiy_two_image');
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
        Schema::dropIfExists('quantitiy_models');
    }
}
