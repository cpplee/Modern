<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/3
 * Time: 21:34
 */

namespace Admin\Controller;


use Think\Controller;

class BaseController extends Controller
{


    public function _initialize(){


       if(!$_SESSION['uid']&&!$_SESSION['username']){

           $this->error('非法登录..',U(MODULE_NAME.'/Login/index'));
       }

    }

}