<?php
/**
 * Created by PhpStorm.
 * User: amel.maulany
 * Date: 6/13/2017
 * Time: 9:31 AM
 */

namespace App\Util;


use App\Beans\UserBean;
use Illuminate\Http\Request;

class UserUtil
{
    const USER_OBJECT = "USER_OBJECT";

    /***
    * get login user from session
     * @return UserBean
     */
    public static function getAuthenticateUser(Request $request){
        $value =  $request->session()->get(UserUtil::USER_OBJECT);

        if($value !=null){
            $result = new UserBean();
            foreach ($value as $key=>$val){
                $result->$key = $val;
            }
            return $result;
        }
        return null;
    }

    public static function saveAuthentication(Request $request,UserBean $auth){
        $arrUserBean = json_decode(json_encode($auth->serialize()),true);

        $request->session()->put(UserUtil::USER_OBJECT,$arrUserBean);

    }
}