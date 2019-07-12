<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHmoHcpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hmo_hcp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('operator_user_id')->nullable();
            $table->integer('verify_id')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->string('action')->default('pending');
            $table->string('provider_payment_mechanism')->nullable();
            $table->decimal('capitation_agreement', 40, 2)->nullable()->default(0);
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE hmo_hcp AUTO_INCREMENT = 90031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hmo_hcp');
    }
}
