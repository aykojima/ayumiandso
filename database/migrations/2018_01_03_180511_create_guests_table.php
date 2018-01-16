<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_name', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('password');
            $table->char('is_attending', 1);
            $table->integer('number_adults');
            $table->integer('number_children');
            $table->text('food_allergy');
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
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
        Schema::dropIfExists('first_name');
    }
}
