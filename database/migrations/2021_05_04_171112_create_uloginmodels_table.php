<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUloginmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uloginmodels', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("username");
            $table->string("phonenumber");
            $table->string("password");
            $table->string("repassword");
            $table->string("cid");
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
        Schema::dropIfExists('uloginmodels');
    }
}
