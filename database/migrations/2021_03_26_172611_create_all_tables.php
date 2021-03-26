<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
        });
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('mark_car');
            $table->string('model_car');
            $table->string('version_car');
        });
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_car');
            $table->dateTime('ap_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('cars');
        Schema::dropIfExists('maintenances');
    }
}
