<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRightRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('right_role', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('right_id');
            $table->tinyInteger('role_id')->unsigned();
            $table->foreign('right_id')->references('id')->on('rights')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('right_role');
    }
}
