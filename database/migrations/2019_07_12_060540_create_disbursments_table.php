<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisbursmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disbursments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('remittance')->default(0);
            $table->decimal('amount', 40, 2)->nullable()->default(0);
            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');

            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
            
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE disbursments AUTO_INCREMENT = 100031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disbursments');
    }
}
