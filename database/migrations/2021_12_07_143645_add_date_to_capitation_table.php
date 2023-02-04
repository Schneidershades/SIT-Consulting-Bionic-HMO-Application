<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDateToCapitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('capitations', function (Blueprint $table) {
            $table->string('month')->nullable()->after('action');
            $table->string('year')->nullable()->after('action');
            $table->integer('operator_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('capitations', function (Blueprint $table) {
            $table->dropColumn(['month', 'year', 'operator_id']);
        });
    }
}
