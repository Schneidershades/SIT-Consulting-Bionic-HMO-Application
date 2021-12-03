<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrolleeServiceAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrollee_service_alerts', function (Blueprint $table) {
            $table->id();
            $table->integer('hmo_id')->unsigned()->index()->nullable();
            $table->integer('hcp_id')->unsigned()->index()->nullable();
            $table->integer('enrollee_id')->unsigned()->index()->nullable();
            $table->integer('visits')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('enrollee_service_alerts');
    }
}
