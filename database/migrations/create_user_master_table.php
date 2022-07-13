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
        Schema::create('user_master', function (Blueprint $table) {
           // $table->id();
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('username');
            $table->text('password');
            $table->integer('role');
            $table->integer('created_by');
           
            $table->integer('updated_by');
           
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
        Schema::dropIfExists('user_master');
    }
};
