<?php


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseaseClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('identifier')->nullable();
            $table->string('disease_code')->nullable();
            $table->text('description')->nullable();
            $table->string('parent_id')->nullable();
            $table->integer('operator_user_id')->nullable()->index();
            $table->integer('user_type')->nullable()->index();
            $table->integer('verify_id')->nullable()->index();
            $table->string('action')->default('pending');
            $table->timestamps();

            // DB::update("ALTER TABLE disease_classes AUTO_INCREMENT = 1300031");
        });

        
        DB::update("ALTER TABLE disease_classes AUTO_INCREMENT = 30831;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disease_classes');
    }
}
