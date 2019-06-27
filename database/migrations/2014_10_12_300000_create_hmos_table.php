<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHmosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hmos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->string('hmo_code')->nullable();
            $table->string('hmo_name')->nullable();
            $table->string('hmo_address')->nullable();
            $table->string('hmo_state')->nullable();
            $table->string('hmo_contact')->nullable();
            $table->string('hmo_region')->nullable();
            $table->string('hmo_email')->nullable();
            $table->string('hmo_fax')->nullable();
            $table->string('hmo_executive_name')->nullable();
            $table->string('hmo_service')->nullable();

            $table->string('hmo_payment_gateway')->nullable();
            $table->string('hmo_payment_api_public_key_sandbox')->nullable();
            $table->string('hmo_payment_api_private_key_sandbox')->nullable();

            $table->string('hmo_payment_api_public_key_live')->nullable();
            $table->string('hmo_payment_api_private_key_live')->nullable();
            
            $table->integer('operator_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
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
        Schema::dropIfExists('hmos');
    }
}
