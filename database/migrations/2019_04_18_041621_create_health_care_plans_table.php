<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealthCarePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('health_care_plans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->integer('hmo_id')->nullable();
            $table->string('plan')->nullable();
            $table->integer('parent_id')->nullable();
            $table->decimal('amount', 40, 2)->default(0);
            $table->integer('operator_user_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
            $table->integer('hmo_signature_approvals')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        
        DB::update("ALTER TABLE health_care_plans AUTO_INCREMENT = 2300031;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('health_care_plans');
    }
}
