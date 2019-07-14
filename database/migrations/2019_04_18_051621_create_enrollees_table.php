<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrolleesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->string('nhis_identifier')->nullable();
            $table->date('nhis_reg_date')->nullable();
            $table->date('expiry_date')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('referral_code')->nullable();
            $table->integer('health_plan_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('next_of_kin')->nullable();
            $table->string('next_of_kin_relationship')->nullable();
            $table->string('next_of_kin_address')->nullable();
            $table->string('email')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('residential_state')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('genotype')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('dob')->nullable();
            $table->string('occupation')->nullable();
            $table->string('company')->nullable();
            $table->string('company_sector')->nullable();
            $table->string('nationality')->nullable();
            $table->string('national_identity_no')->nullable();
            $table->string('national_identity_expiry')->nullable();
            $table->string('relationship')->nullable('principal');
            $table->integer('parent_id')->nullable();
            $table->integer('operator_user_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
            $table->string('image')->default('pending');
            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');

            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });


        DB::update("ALTER TABLE enrollees AUTO_INCREMENT = 100031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrollees');
    }
}
