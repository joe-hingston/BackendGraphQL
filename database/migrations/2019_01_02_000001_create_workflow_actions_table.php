<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkflowActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workflow_actions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('action');
            $table->string('from');
            $table->string('to');

            $table->unsignedInteger('rclass_id');
            $table->foreign('rclass_id')->references('id')->on('rclasses');

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
        Schema::dropIfExists('workflow_actions');
    }
}
