<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_client', function(Blueprint $table) {
            $table->foreign('project_id')->references('id')->on('project')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('project_client', function(Blueprint $table) {
            $table->foreign('client_id')->references('id')->on('client')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
