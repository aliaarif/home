<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('ucode')->default('ucodel'.time());
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('nationality')->nullable();
            $table->string('country')->nullable();
            $table->string('country_phonecode_mobile')->nullable();
            $table->string('mobile')->default(mt_rand(7891234560, 9999999999));
            $table->string('country_phonecode_whatsapp')->nullable();
            $table->string('whatsapp_mobile')->nullable();
            $table->string('photo_id_type')->nullable();
            $table->string('photo_id')->nullable();
            $table->string('address_proof_type')->nullable();
            $table->string('address_proof')->nullable();
            $table->string('proof_of_experience')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('paypal_email')->nullable();
            $table->string('bank_country')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch_address')->nullable();
            $table->string('beneficiary_name')->nullable();
            $table->string('beneficiary_account_number')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('bank_statement')->nullable();
            $table->string('cancelled_cheque')->nullable();
            $table->string('work_experience')->nullable();
            $table->integer('translation')->default(0);
            $table->integer('proofreading')->default(0);
            $table->integer('quality_assurance')->default(0);
            $table->integer('ms_office_tool_powerPoint')->default(0);
            $table->integer('ms_office_tool_Word')->default(0);
            $table->integer('ms_office_tool_Excel')->default(0);
            $table->integer('ms_office_tool_Visio')->default(0);
            $table->integer('cat_tool_MemoQ')->default(0);
            $table->integer('cat_tool_sds_trados')->default(0);
            $table->integer('cat_tool_other')->default(0);
            $table->json('expertise')->nullable();
            $table->json('availability')->nullable();
            $table->json('sunday')->nullable();
            $table->json('monday')->nullable();
            $table->json('tuesday')->nullable();
            $table->json('wednesday')->nullable();
            $table->json('thursday')->nullable();
            $table->json('friday')->nullable();
            $table->json('saturday')->nullable();

            $table->string('base_rate')->nullable();
            $table->string('quota')->nullable();
            $table->string('incentives_wt')->nullable();
            $table->string('incentives_wp')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
