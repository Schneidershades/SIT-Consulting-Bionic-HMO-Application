<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffDrugTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariff_drug_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->integer('hospitable_id')->nullable();
            $table->string('hospitable_type')->nullable();
            $table->integer('enrollee_id')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('bill_id')->nullable();
            $table->date('period')->nullable();
            $table->boolean('pre_authorization')->default(false);
            $table->string('status')->default('pending');
            $table->string('service_type')->nullable();
            $table->decimal('amount', 40, 2)->nullable()->default(0);
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
        Schema::dropIfExists('tariff_drug_transactions');
    }
}
