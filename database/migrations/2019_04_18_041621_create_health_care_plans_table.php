<?php
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
        Schema::dropIfExists('health_care_plans');
    }
}
