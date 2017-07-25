<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/12/2017
 * Time: 5:39 AM
 */

namespace App\Beans;


class HadithGroupBean
{
    private $id;
    private $groupName;
    private $children = array();

    function __set($name, $value)
    {
       if(property_exists(HadithGroupBean::class,$name)){
           $this->$name = $value;
       }
    }

    function __get($name)
    {
        if(property_exists(HadithGroupBean::class,$name)){
            return $this->$name;
        }
    }
}