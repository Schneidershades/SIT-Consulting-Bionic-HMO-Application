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
            $table->bigIncrements('id');
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
            
            $table->string('health_supervisor')->nullable();
            $table->string('health_supervisor_phone')->nullable();

            $table->text('service_break_down')->nullable();
            $table->text('drug_break_down')->nullable();

            // the id of the user inputing the data
            $table->integer('hcp_data_entry_user_id')->nullable()->index();
            // the just validate that the hcp_data_entry_user_id is okay
            $table->boolean('hcp_data_entry_input')->default(true);

            // the id of the user verifying the hcp_data_entry_user_id data
            $table->integer('hcp_data_verifier_user_id')->nullable()->index();

            // the just validate that the hcp_data_verify_user_id is okay
            $table->boolean('hcp_data_verifier_input')->default(false);

            // verify user current status of the bill 
            $table->string('hcp_data_verifier_input_status')->default('pending');

            // the just validate that the hcp_data_verify_user_id is okay
            $table->string('hcp_data_verifier_input_description')->nullable();

            // the id of the user inputing the data
            $table->integer('hmo_data_entry_user_id')->nullable()->index();

            // the just validate that the hcp_data_entry_user_id is touched
            $table->boolean('hmo_data_entry_input')->default(true);

            // verify user current status of the bill 
            $table->string('hmo_data_entry_check_status')->default('pending');

            // the id of the user verifying the hcp_data_entry_user_id data
            $table->integer('hmo_data_verifier_user_id')->nullable()->index();

            // the just validate that the hcp_data_verify_user_id is okay
            $table->boolean('hmo_data_verifier_input')->default(false);

            // verify user current status of the bill 
            $table->string('hmo_data_verifier_input_status')->default('pending');

            // the just validate that the hcp_data_verify_user_id is okay
            $table->string('hmo_data_verifier_input_description')->nullable();


            $table->integer('hmo_claims_verify_user_id')->nullable();

            // the just validate that the hcp_data_verify_user_id is okay
            $table->boolean('hmo_claims_verifier_input')->default(false);

            // verify user current status of the bill 
            $table->string('hmo_claims_verify_check_status')->default('pending');

            $table->text('hmo_claims_verify_description')->nullable();

            // $table->string('hcp_agreement')->default('no');
            // $table->string('hmo_agreement')->default('no');

            $table->string('disbursment')->default('processing');

            $table->integer('hmo_disbursement_verify_user_id')->nullable();

            $table->boolean('hmo_disbursement_verify_id')->default(false);

            $table->string('hmo_disbursement_verify_check_status')->default('pending');

            $table->text('hmo_disbursement_verify_description')->nullable();
            
            $table->string('remittance')->nullable();
            $table->string('action')->default('pending');
            $table->boolean('finished')->default(false);
            $table->softDeletes();
            $table->timestamps();

            DB::update("ALTER TABLE bills AUTO_INCREMENT = 2300031;");
        });
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
