<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestAttemptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_attempt', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('test_id');
            $table->string('ucode');
            $table->text('answer')->nullable();
            $table->timestamp('test_started_at')->nullable();
            $table->timestamp('test_ended_at')->nullable();
            $table->string('time_taken')->nullable();

            $table->json('test_score')->nullable();
            $table->json('test_result')->nullable();

            $table->string('total_time')->nullable();
            $table->string('reset_time')->nullable();

            $table->string('lang_pair')->nullable();
            $table->boolean('status')->default(0);
            
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
        Schema::dropIfExists('test_attempt');
    }
}
