<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTariffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tariffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->string('tariff_code')->nullable();
            $table->text('description')->nullable();
            $table->string('parent_id')->nullable();
            $table->decimal('amount', 40, 2)->default(0);
            $table->integer('operator_id')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
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
        Schema::dropIfExists('tariffs');
    }
}
