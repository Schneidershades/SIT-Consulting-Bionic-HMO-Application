<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHcpTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hcp_transfers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('transfer_to_hcp_id')->nullable();
            $table->string('check_in_transfer_to_hcp_status')->default('pending');
            $table->integer('hcp_check_in_transfer_user_id')->nullable();

            $table->integer('transfer_from_hcp_id')->nullable();

            $table->integer('enrollee_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('transferrable_id')->nullable();
            $table->string('transferrable_type')->nullable();
            $table->text('transfer_reason')->nullable();
            
            $table->string('action')->default('pending');

            // the id of the user inputing the data
            $table->integer('requesting_user_id')->nullable()->index();
            $table->integer('approving_user_id')->nullable()->index();

            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');
            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
            
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE hcp_transfers AUTO_INCREMENT = 30831;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hcp_transfers');
    }
}
