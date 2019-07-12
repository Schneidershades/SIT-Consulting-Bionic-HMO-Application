<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->integer('cash_type_id')->nullable();
            $table->integer('cash_classification_id')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->date('transaction_date')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->text('json_description')->nullable();
            $table->decimal('amount', 40, 2)->default(0);
            $table->string('payment_method')->nullable();
            $table->integer('cashable_id')->nullable()->unsigned();
            $table->string('cashable_type')->nullable();
            $table->integer('operator_user_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE cash_transactions AUTO_INCREMENT = 90031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cash_transactions');
    }
}
