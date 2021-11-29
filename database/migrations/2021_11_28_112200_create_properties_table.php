<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('property_number');
            $table->string('property_name');
            $table->text('description');
            $table->string('street_name');
            $table->string('street_NO');
            $table->bigInteger('num_of_rooms');
            $table->integer('postcode');
            $table->integer('status');
            $table->double('cost')->nullable();
            $table->text('location');
            $table->date('published_date');

            $table->integer('room_type');
            $table->integer('property_type');
            $table->double('share_price');
            $table->double('share_limit');
            $table->string('dimensions');
            $table->text('benefits');
            $table->double('monthly_rent');
            $table->double('yearly_rent');
            $table->string('market_study');


            $table->softDeletes();
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
        Schema::dropIfExists('properties');
    }
}
