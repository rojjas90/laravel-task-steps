<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingPriorityToTasks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
//php artisan make:migration adding_priority_to_tasks --table tasks

    public function up()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('priority');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropColumn('priority');
        });
    }
}
