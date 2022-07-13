<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;

    public function up(){
        Schema::create('user_master', function (Blueprint $table) {
            $table->id();
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->text('username');
            $table->text('password');
            $table->integer('role');
            $table->integer('created_by');
            $table->dateTime('created_at', $precision = 0);
            $table->integer('updated_by');
            $table->dateTime('updated_at', $precision = 0);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('user_master');
    }

}
