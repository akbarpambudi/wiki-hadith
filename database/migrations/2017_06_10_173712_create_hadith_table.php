<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHadithTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hadith',function (Blueprint $table){
            \Database\Util\BaseTable::addBaseEntityField($table);
            $table->string('title');
            $table->longText('arabicContent');
            $table->longText('content');
            $table->unsignedBigInteger('groupId');
            $table->foreign('groupId')->references('id')->on('hadith_group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('hadith');
    }
}
