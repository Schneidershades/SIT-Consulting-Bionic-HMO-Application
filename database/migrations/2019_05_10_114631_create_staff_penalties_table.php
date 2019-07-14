<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffPenaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_penalties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cash_classification_id')->nullable();
            $table->decimal('amount', 40, 2)->default(0);
            $table->integer('staff_id')->unsigned()->nullable();
            $table->string('benefit_period')->nullable();
            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');

            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE staff_penalties AUTO_INCREMENT = 30831;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_penalties');
    }
}
