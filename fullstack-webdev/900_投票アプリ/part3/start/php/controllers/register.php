<?php

namespace controller\register;

use lib\Auth;
use lib\Msg;
use model\UserModel;

function get()
{
    require_once SOURCE_BASE . 'views/register.php';
}

function post()
{
    $user = new UserModel;
    $user->id = get_param('id', '');
    $user->pwd = get_param('pwd', '');
    $user->nickname = get_param('nickname', '');

    if (Auth::regist($user)) {

        Msg::push(Msg::INFO, "{$user->nickname}さん、ようこそ。");
        redirect(GO_HOME);
       
    } else {

        redirect(GO_REFERER);
        
    }
}
