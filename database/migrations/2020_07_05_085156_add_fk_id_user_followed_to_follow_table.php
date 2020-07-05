<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkIdUserFollowedToFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('follow', function (Blueprint $table) {
            $table->bigInteger('fk_id_user_followed')->unsigned()->nullable();
            $table->foreign('fk_id_user_followed')->references('id_user')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('follow', function (Blueprint $table) {
            $table->dropForeign(['fk_id_user_followed']);
            $table->dropColumn('fk_id_user_followed');
        });
    }
}
