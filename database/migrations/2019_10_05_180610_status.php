<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Status extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('tasks', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->boolean('is_completed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::table('tasks', function (Blueprint $table) {
            $table->softDeletes();
            $table->dropColumn('is_completed');
        });
    }
}
