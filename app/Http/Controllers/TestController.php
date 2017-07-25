<?php

namespace App\Http\Controllers;

use App\Beans\UserBean;
use App\Repository\HadithGroupRepository;
use App\Util\UserUtil;
use Illuminate\Http\Request;

class TestController extends Controller
{

    //
    public function index(Request $request){
        $userBean = new UserBean();
        $userBean->username = "username nya";
        $userBean->loginAt = "";
        UserUtil::saveAuthentication($request,$userBean);

    }

    public function accessSes(Request $request){
        var_dump(UserUtil::getAuthenticateUser($request));
    }


}
