<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('lives')->nullable();
            $table->decimal('cap_rate', 40, 2)->default(0);
            $table->string('remittance')->nullable();
            $table->date('period')->nullable();
            $table->integer('operator_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
            $table->string('disbursment')->default('processing');
            $table->boolean('hmo_disbursement_operator_id')->default(false);
            $table->boolean('hmo_disbursement_verify_id')->default(false);
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
        Schema::dropIfExists('capitations');
    }
}
