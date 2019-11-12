<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('name');
            $table->string('gender')->comment('1->male,2->female');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('status')->comment('0->inactive,1->active');
            $table->string('profile_img')->nullable();
            $table->string('dob')->nullable();
            $table->string('relationship')->nullable();
            $table->string('language')->nullable();
            $table->string('hobbies')->nullable();
            $table->string('myself')->nullable();
            $table->string('motto')->nullable();
            $table->string('fake')->comment('0->real,1->fake');
            $table->string('deleted')->nullable();
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
