<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class HadithGroup extends Model
{
    protected $table = "hadith_group";
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function hadiths(){
        $this->hasMany('App\Hadith');
    }
}