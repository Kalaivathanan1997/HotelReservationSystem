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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table ->string('c_name');
            $table->text('address');
            $table->date('birth');
            $table->char('phone',20);
            $table->string('national');
            $table->string('nic')->unique();
            $table->char('gender',15);
            $table->char('stutas',20);
            $table->string('email')->unique();
            $table->string('pass');
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
        Schema::dropIfExists('customers');
    }
};
