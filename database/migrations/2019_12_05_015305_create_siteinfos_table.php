<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siteinfos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');

            $table->string('url');
            $table->string('companyname');

            $table->string('address');
            $table->string('city');
            $table->string('postcode');
            $table->string('country');

            $table->string('weekstart');
            $table->string('weekend');
            $table->string('hourstart');
            $table->string('hourend');

            $table->string('restday1');
            $table->string('restday2')->nullable();
     
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
        Schema::dropIfExists('siteinfos');
    }
}
