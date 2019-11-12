<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendRequest extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friendrequest', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('requester');
            $table->integer('requestee');
            $table->integer('status')->comment('0->No response,1->accepted, 2->rejected,3->cencel');
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
        Schema::dropIfExists('friendrequest');
    }
}
