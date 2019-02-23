<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pickup_place_id');
            $table->unsignedInteger('destination_id');
            $table->unsignedInteger('rate_id');
            $table->integer('minimum_days');
            $table->integer('cost');
            $table->unsignedInteger('service_class_id');
            $table->timestamps();

            $table->foreign('rate_id')->references('id')->on('rates');
            $table->foreign('service_class_id')->references('id')->on('service_classes');
            $table->foreign('pickup_place_id')->references('id')->on('pickup_places');
            $table->foreign('destination_id')->references('id')->on('destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('services', function (Blueprint $table) {
            //
        });
    }
}
