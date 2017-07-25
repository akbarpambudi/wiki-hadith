<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHadithNaratorLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('narrator_hadith_link',function (Blueprint $table){
            \Database\Util\BaseTable::addBaseEntityField($table);
            $table->unsignedBigInteger('narratorId');
            $table->unsignedBigInteger('hadithId');
            $table->integer('order');
            $table->foreign('narratorId')->references('id')->on('narrator');
            $table->foreign('hadithId')->references('id')->on('hadith');
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
        Schema::drop('narrator_hadith_link');
    }
}
