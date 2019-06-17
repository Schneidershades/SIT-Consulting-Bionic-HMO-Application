<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->integer('staffable_id')->unsigned();
            $table->string('staffable_type')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('sex')->nullable();
            $table->string('dob')->nullable();
            $table->string('rank')->nullable();
            $table->string('profession')->nullable();
            $table->string('designation')->nullable();
            $table->string('department')->nullable();
            $table->string('qualification')->nullable();
            $table->string('postion')->nullable();
            $table->string('confirmed')->default('yes');
            $table->string('pension_managers')->nullable();
            $table->string('initial_appointment_date')->nullable();
            $table->string('present_appointment_date')->nullable();
            $table->string('employment_type')->nullable();
            $table->string('current_location')->nullable();
            $table->string('previous_location')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('pob')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('contact_address')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('genotype')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('state_deformity')->nullable();
            $table->integer('operator_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->softDeletes();
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
        Schema::dropIfExists('staff');
    }
}
