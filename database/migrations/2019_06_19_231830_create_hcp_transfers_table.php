<?php

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
            $table->integer('hcp_id')->nullable();
            $table->integer('enrollee_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('transferrable_id')->nullable();
            $table->string('transferrable_type')->nullable();
            $table->text('transafer_reason')->nullable();
            $table->string('action')->default('pending');
            // the id of the user inputing the data
            $table->integer('requesting_user_id')->nullable()->index();
            $table->integer('approving_user_id')->nullable()->index();
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
        Schema::dropIfExists('hcp_transfers');
    }
}
