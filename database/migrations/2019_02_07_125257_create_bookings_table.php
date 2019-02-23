<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('days');
            $table->string('nama_pemesan');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->date('tgl_peminjaman');
            $table->date('tgl_pengembalian');
            $table->unsignedInteger('service_id');
            $table->string('transaction_id');
            $table->integer('status');
            $table->integer('discount');
            $table->text('pickup_address');
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
        });
    }
}
