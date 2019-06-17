<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceDrugTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_drug_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hospitable_id')->nullable();
            $table->string('hospitable_type')->nullable();
            $table->integer('enrollee_id')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->date('period')->nullable();
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
        Schema::dropIfExists('service_drug_transactions');
    }
}
