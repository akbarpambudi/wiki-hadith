<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/13/2017
 * Time: 9:32 AM
 */

namespace App\Beans;


class UserBean
{
    private $username;
    private $loginAt;

    public function __set($name, $value)
    {
       if(property_exists(UserBean::class,$name)){
           $this->$name = $value;
       }
    }

    public function __get($name)
    {
       if(property_exists(UserBean::class,$name)){
           return $this->$name;
       }
       return null;
    }

    public function serialize(){
        $serializeVal = array();
        foreach($this as $key => $val){
            $serializeVal[$key] = $val;
        }
        return $serializeVal;
    }
}