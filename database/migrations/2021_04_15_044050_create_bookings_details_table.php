<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings_details', function (Blueprint $table) {
            $table->id();
            $table->string('booking_id');
            $table->string('bedroom');
            $table->string('bath');
            $table->string('how_often');
            $table->string('subs');
            $table->string('extra');
            $table->string('supplie');
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
        Schema::dropIfExists('bookings_details');
    }
}
