<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ucode')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('source_language')->nullable();
            $table->string('target_language')->nullable();
            $table->string('test_duration')->nullable();
            $table->string('instructions')->nullable();
            $table->string('word_count')->nullable();
            $table->string('test_type')->default('text');
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
        Schema::dropIfExists('tests');
    }
}
