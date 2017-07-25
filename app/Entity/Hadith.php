<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/11/2017
 * Time: 11:03 PM
 */

namespace App\Entity;


use Illuminate\Database\Eloquent\Model;

class Hadith extends Model
{
    protected $table='hadith';

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function hadithGroup(){
        $this->belongsTo('App\HadithGroup');
    }
}