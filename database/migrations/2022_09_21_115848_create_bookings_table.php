<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('customer_id')->unsigned();
             $table->foreign('customer_id')->references('id')->on('customers')->onUpdate('cascade') ;

             $table->bigInteger('room_id')->unsigned();
             $table->foreign('room_id')->references('id')->on('rooms')->onUpdate('cascade');

             $table->integer('adults');
             $table->integer('kids');
             $table->date('check_in');
             $table->date('check_out');
             $table->date('booking_date');
             $table->text('additionalNeed')->nullable();
             $table->double('totalAmount');
             $table->double('additionalAmount')->nullable();
             $table->double('payableAmount');
             $table->enum('stutas' ,['Pending','Accept','Release'])->default('Pending');
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
        Schema::dropIfExists('bookings');
    }
};
