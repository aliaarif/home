<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('acode')->default('acodel'.time());
            $table->string('client_id')->nullable();
            $table->string('client_team_id')->nullable();
            $table->string('client_requester_name')->nullable();
            $table->string('client_instructions')->nullable();
            $table->string('assignment_name')->nullable();
            $table->string('assignment_path')->nullable();
            $table->string('created_by')->default(1);
            $table->string('source_lang')->nullable();
            $table->string('target_lang')->nullable();
            $table->string('word_count')->nullable();
            $table->string('page_count')->nullable();
            $table->text('comment')->nullable();
            //$table->string('duration')->nullable();
            $table->datetime('assignment_start_date')->default(date("Y-m-d H:i:s", strtotime(now().' +4 hours')));
            $table->datetime('assignment_end_date')->default(date("Y-m-d H:i:s", strtotime(now().' +4 hours')));
            //$table->datetime('deadline')->default(date("Y-m-d H:i:s", strtotime(now().' +4 hours')));            
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
        Schema::dropIfExists('assignments');
    }
}
