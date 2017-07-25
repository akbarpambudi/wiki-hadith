<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLevelColumnHadithGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        //Schema::table('hadith_group',function (Blueprint $table){
          //  $table->integer('level');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        //Schema::table('hadith_group',function (Blueprint $table){
            //$table->dropColumn('level');
        //});
    }
}
