<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gender');
            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('package');
            $table->string('extra');
            $table->string('date');

            $table->integer('height');
            $table->integer('length');
            $table->integer('width');
            $table->integer('weight');

            $table->integer('from');
            $table->integer('to');

            $table->string('user_id');
            $table->string('price')->nullable();
            $table->string('status');
            $table->string('trackingnumber')->nullable();
            $table->string('mapurl')->nullable();
            $table->string('senderid')->nullable();
            


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
        Schema::dropIfExists('quotes');
    }
}
