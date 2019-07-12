<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_benefits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cash_classification_id')->nullable();
            $table->decimal('amount', 40, 2)->default(0);
            $table->integer('staff_id')->unsigned()->nullable();
            $table->string('benefit_period')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE staff_benefits AUTO_INCREMENT = 30831;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_benefits');
    }
}
