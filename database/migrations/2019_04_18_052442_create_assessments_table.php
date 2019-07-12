<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->date('assessment_date')->nullable();
            $table->text('remark')->nullable();
            $table->text('recommendation')->nullable();
            $table->integer('hcp_id')->nullable()->index();
            $table->integer('hmo_id')->nullable()->index();
            $table->integer('operator_user_id')->nullable()->index();
            $table->string('action')->default('pending');
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE assessments AUTO_INCREMENT = 90031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
