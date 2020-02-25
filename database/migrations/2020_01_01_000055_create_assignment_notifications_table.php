<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_notifucations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('acode')->default('acodel'.time());
            $table->string('ucode')->default('acodel'.time());
            $table->text('comment')->nullable();
            $table->datetime('assignment_start_date')->nullable();
            $table->datetime('assignment_end_date')->nullable();
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
        Schema::dropIfExists('assignment_notifucations');
    }
}
