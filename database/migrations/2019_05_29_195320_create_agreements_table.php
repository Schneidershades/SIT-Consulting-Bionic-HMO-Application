<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hcp_id')->nullable()->index();
            $table->integer('hmo_id')->nullable()->index();
            $table->string('service_type')->nullable();
            $table->decimal('amount', 40, 2)->default(0);
            $table->integer('agreementable_id')->nullable();
            $table->string('agreementable_type')->nullable();
            $table->string('status')->default('pending');
            $table->string('hcp_agreement_status')->default('pending');
            $table->string('hcp_agreement_status')->default('pending');
            $table->integer('hcp_user_id')->nullable()->index();
            $table->integer('hmo_user_id')->nullable()->index();
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
        Schema::dropIfExists('agreements');
    }
}
