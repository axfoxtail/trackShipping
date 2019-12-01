<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senders', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('gender');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');

            $table->string('address');
            $table->string('city');
            $table->string('postcode');
            $table->string('country');
     
            $table->string('visualcheck');
            $table->string('doccheck');
            $table->string('generalcheck');
            $table->string('class');
            $table->string('paymentstatus');

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
        Schema::dropIfExists('senders');
    }
}
