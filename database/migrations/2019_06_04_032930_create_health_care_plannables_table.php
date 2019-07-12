<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthCarePlannablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_care_plannables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('health_care_plan_id');
            $table->integer('health_care_plannables_id')->nullable();
            $table->string('health_care_plannables_type')->nullable();
            $table->integer('times_in_a_month')->nullable();
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
        Schema::dropIfExists('health_care_plannables');
    }
}
