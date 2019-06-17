<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->string('hcp_code')->nullable();
            $table->string('hcp_name')->nullable();
            $table->string('hcp_address')->nullable();
            $table->string('hcp_state')->nullable();
            $table->string('hcp_contact')->nullable();
            $table->string('hcp_service')->nullable();
            $table->string('hcp_category')->nullable();
            $table->string('hcp_email')->nullable();
            $table->string('hcp_bank_name')->nullable();
            $table->string('hcp_bank_account_number')->nullable();
            $table->string('hcp_bank_sort_code')->nullable();
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
        Schema::dropIfExists('hcps');
    }
}
