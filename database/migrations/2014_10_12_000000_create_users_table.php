<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('bname')->nullable();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->string('url')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('postcode');
            $table->string('partner_email')->nullable();
            $table->string('btype')->nullable();
            $table->string('bnature')->nullable();
            $table->string('bfname')->nullable();
            $table->string('blname')->nullable();
            $table->string('title')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
