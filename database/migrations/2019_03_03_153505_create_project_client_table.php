<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_client', function (Blueprint $table) {
            $table->increments('id');
            $table->foreign('project_id')->references('id')->on('project')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('client')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('project_client');
    }
}
