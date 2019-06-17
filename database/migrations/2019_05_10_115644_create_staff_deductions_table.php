<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_deductions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cash_classification_id')->nullable();
            $table->decimal('amount', 40, 2)->default(0);
            $table->integer('staff_id')->unsigned()->nullable();
            $table->string('benefit_period')->nullable();
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
        Schema::dropIfExists('staff_deductions');
    }
}
