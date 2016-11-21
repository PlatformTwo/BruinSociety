<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminSociety extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_society', function (Blueprint $table) {
            //
            $table->integer('admin_id')->unsigned();
            $table->integer('society_id')->unsigned();

            $table->foreign('admin_id')->references('id')->on('users');
            $table->foreign('society_id')->references('id')->on('societies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admin_society', function (Blueprint $table) {
            //
        });
    }
}
