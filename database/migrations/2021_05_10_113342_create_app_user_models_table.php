<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppUserModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app_user_models', function (Blueprint $table) {
            $table->id();
            $table->string('user_email')->unique();
            $table->string('user_name', 100);
            $table->binary('user_profile')->nullable();
            $table->integer('verification');
            $table->integer("status")->default(0);
            $table->integer('score')->default(0);
            $table->string('user_password');
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
        Schema::dropIfExists('app_user_models');
    }
}
