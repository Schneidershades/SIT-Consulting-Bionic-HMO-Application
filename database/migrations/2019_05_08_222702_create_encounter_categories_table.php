<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEncounterCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encounter_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->integer('operator_user_id')->unsigned()->nullable();
            $table->integer('hmo_signature_approvals')->default(0);
            $table->string('hmo_signature_status')->default('pending');

            $table->integer('hcp_signature_approvals')->default(0);
            $table->string('hcp_signature_status')->default('pending');
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
        Schema::dropIfExists('encounter_categories');
    }
}
