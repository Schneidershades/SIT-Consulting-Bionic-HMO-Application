<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->integer('claimable_id')->nullable();
            $table->string('claimable_type')->nullable();
            $table->integer('enrollee_id')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('bill_id')->nullable();
            $table->date('period')->nullable();
            $table->boolean('pre_authorization')->default(false);
            $table->string('initiation_disbursment')->default('pending');
            $table->timestamp('initiation_disbursment_date')->nullable();
            $table->string('status')->default('pending');
            $table->string('service_type')->nullable();
            $table->decimal('amount', 40, 2)->nullable()->default(0);
            $table->string('verification')->nullable();
            $table->integer('operator_user_id')->nullable()->index();
            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');

            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });
        

        
        DB::update("ALTER TABLE claims AUTO_INCREMENT = 100031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('claims');
    }
}
