<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHadithGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hadith_group',function(Blueprint $table){
           \Database\Util\BaseTable::addBaseEntityField($table);
           $table->string('groupName');
           $table->unsignedBigInteger('parent')->nullable();
           $table->string('description');

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
        Schema::drop('hadith_group');
    }
}
