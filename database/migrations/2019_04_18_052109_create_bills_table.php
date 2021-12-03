<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->nullable();
            $table->integer('enrollee_id')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->date('date_of_bill')->nullable();
            $table->string('treatment')->nullable();
            $table->string('description')->nullable();
            $table->string('active')->default('yes');
            $table->decimal('amount_charged', 40, 2)->nullable()->default(0);
            $table->decimal('amount_paid', 40, 2)->nullable()->default(0);
            $table->decimal('hcp_deduction', 40, 2)->nullable()->default(0);
            $table->decimal('service_deduction', 40, 2)->nullable()->default(0);
            $table->decimal('drug_deduction', 40, 2)->nullable()->default(0);
            $table->decimal('final_payment', 40, 2)->nullable()->default(0);
            $table->string('payment_method')->nullable();
            $table->string('payment_reference')->nullable();
            $table->text('service_break_down')->nullable();
            $table->text('drug_break_down')->nullable();
            $table->string('disbursment')->default('processing');  
            $table->string('action')->default('pending');
            $table->boolean('finished')->default(false);

            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');

            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
            
            $table->softDeletes();
            $table->timestamps();
        });


        DB::update("ALTER TABLE bills AUTO_INCREMENT = 2300031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
