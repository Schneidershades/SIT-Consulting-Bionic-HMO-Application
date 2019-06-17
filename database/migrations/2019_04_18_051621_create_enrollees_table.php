<?php

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
            $table->integer('hmo_id')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('referral_code')->nullable();
            $table->integer('health_plan_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('residential_address')->nullable();
            $table->string('residential_state')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('dob')->nullable();
            $table->string('occupation')->nullable();
            $table->string('company')->nullable();
            $table->string('company_sector')->nullable();
            $table->string('nationality')->nullable();
            $table->integer('parent_id')->nullable();
            $table->integer('operator_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
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
        Schema::dropIfExists('enrollees');
    }
}
