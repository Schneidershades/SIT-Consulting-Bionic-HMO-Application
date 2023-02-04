<?php

use Illuminate\Support\Facades\DB;
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
            $table->id();
            $table->string('identifier')->nullable();
            $table->integer('hcp_id')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->integer('lives')->nullable();
            $table->decimal('capitation_rate', 40, 2)->default(0);
            $table->string('remittance')->nullable();
            $table->date('period')->nullable();
            $table->integer('operator_user_id')->nullable()->index();
            $table->string('action')->default('pending');
            $table->string('month')->nullable();
            $table->string('year')->nullable();
            $table->string('disbursement')->default('processing');
            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');

            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE capitations AUTO_INCREMENT = 90031;");
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
