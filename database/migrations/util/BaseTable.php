<?php

/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/11/2017
 * Time: 1:31 AM
 */
namespace Database\Util;

use Illuminate\Database\Schema\Blueprint;

class BaseTable
{
    public static function addBaseEntityField(Blueprint $table){
        $table->bigIncrements('id');
        $table->dateTime('createdAt')->nullable();
        $table->integer('version')->nullable();
        $table->string('createdBy')->nullable();
        $table->dateTime('updatedAt')->nullable();
        $table->string('updatedBy')->nullable();
    }
}