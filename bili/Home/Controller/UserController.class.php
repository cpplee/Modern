<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2016/3/31
 * Time: 0:52
 */

namespace Home\Controller;
use Think\Controller;

class UserController extends Controller
{

    public function index(){

        p(__ROOT__);
        p(__MODULE__);
      p(MODULE_NAME);

        p(U('Admin/Index/index'));
        $this->display();
    }

    public function login(){

        echo 'login';
    }

    public function register(){

        echo 'register';
    }

}