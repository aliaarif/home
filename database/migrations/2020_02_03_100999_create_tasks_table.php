<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('acode')->nullable();            
            $table->string('task_for')->nullable();
            $table->string('task_type')->nullable();
            $table->datetime('task_started_at')->nullable();
            $table->datetime('task_completed_at')->nullable();
            $table->string('task_comment')->nullable();
            $table->integer('task_status')->default(0);
            $table->string('created_by')->default(1);    
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
        Schema::dropIfExists('tasks');
    }
}
