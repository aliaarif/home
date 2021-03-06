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
            $table->unsignedInteger('role_id')->default(1);
            $table->string('role')->default('Translator');
            $table->string('ucode')->default('ucodel'.time());            
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->boolean('verified')->default(false);
            $table->string('password');
            $table->rememberToken();
            $table->string('api_token')->nullable();
            $table->boolean('status')->default(true);
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
