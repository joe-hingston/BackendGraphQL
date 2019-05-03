<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkflowFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workflow_fields', function (Blueprint $table) {
            $table->increments('id');

            $table->string('field');
            $table->boolean('required');

            $table->unsignedInteger('workflow_action_id');
            $table->foreign('workflow_action_id')->references('id')->on('workflow_actions');

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
        Schema::dropIfExists('workflow_fields');
    }
}
