<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class People extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('dob')->nullable();
            $table->string('education')->nullable();
            $table->string('phone');
            $table->string('password');
            $table->string('state_id');
            $table->string('city_id');
            $table->string('email')->nullable();
            $table->string('laqab_id')->nullable();
            $table->enum('is_profile_shared',["Yes","No"])->dfault("No");
            $table->enum('bureau_image_type',["new","profile"])->default(Null);
            $table->enum('isOnline',["Yes","No"])->default("No");
            $table->enum('app_registered',["Yes","No"])->default("No");
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
