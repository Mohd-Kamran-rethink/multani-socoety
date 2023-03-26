<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bureaus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buearus', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('state_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('qualification_id')->nullable();
            $table->string('phone');
            $table->string('add_mode')->nullable();
            $table->enum('gender',["Male","Female"]);
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
        //
    }
}
