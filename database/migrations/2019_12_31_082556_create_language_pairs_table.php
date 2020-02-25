<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLanguagePairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_pairs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('ucode')->nullable();
            $table->string('flag')->default('language');
            $table->string('name')->nullable();
            $table->string('contract_flag')->nullable();
            $table->string('contract_type')->nullable();
            $table->string('proofreader')->nullable();
            $table->float('fixed_rate')->default(0);
            $table->float('quota_rate')->default(0);
            $table->integer('contract_send')->default(0);
            $table->integer('contract_accept')->default(0);
            $table->integer('translation_wc')->default(0);
            $table->integer('proofreading_wc')->default(0);
            $table->integer('proficiency')->default(1);
            $table->float('final_score', 5, 2)->default(0);
            $table->float('final_rating', 5, 2)->default(0);
            $table->string('document')->nullable();
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
        Schema::dropIfExists('language_pairs');
    }
}
