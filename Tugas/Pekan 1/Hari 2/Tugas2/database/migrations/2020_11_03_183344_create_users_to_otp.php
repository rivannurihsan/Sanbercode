<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersToOtp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('otps', function (Blueprint $table) {
            $table->foreign('id_users')->references('id_users')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('otps', function (Blueprint $table) {
            $table->dropForeign(['id_users']);
            $table->dropColumn(['id_users']);
        });
    }
}
