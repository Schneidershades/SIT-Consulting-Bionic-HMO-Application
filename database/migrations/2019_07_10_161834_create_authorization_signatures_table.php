<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorizationSignaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorization_signatures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('signable_id')->nullable();
            $table->string('signable_type')->nullable();

            $table->integer('organizationable_id')->nullable();
            $table->string('organizationable_type')->nullable();

            $table->string('operator_user_id')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE authorization_signatures AUTO_INCREMENT = 30831;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authorization_signatures');
    }
}
