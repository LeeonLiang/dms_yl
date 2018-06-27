<?php
namespace app\index\controller;
use think\View;
use think\Controller;
use app\index\model\User;

/**
 *
 */
class login extends Controller{
    public function index(){
        $view = new View();
        return $view->fetch('index');
    }
    public function login($user_name='',$user_passwd=''){
        $user = User::get([
            'user_name' => $user_name,
            'UserPasswd' => $user_passwd
        ]);
        if($user){
            echo '登录成功'.$user_name.md5($user_passwd);
        }else{
            return $this->error('登录失败');
        }
    }
}