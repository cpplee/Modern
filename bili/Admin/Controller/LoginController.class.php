<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/26
 * Time: 18:02
 */

namespace Admin\Controller;


use Think\Controller;

class LoginController extends Controller
{

    public function index(){


        $this->display();



    }


    public function login(){


        if(!IS_POST)  $this->redirect(MODULE_NAME.'/Login/index');
        $data = array();

        $data['username'] = I('username');
        $data['password'] = I('password');



        if($user = M('user')->where(array('username'=>$data['username']))->find()){


            if($user['password']==$data['password']){

                $dataup = array(
                    'id'=>$user['id'],
                    'logintime'=>time(),
                    'loginip'=>get_client_ip(),
                );
                session('uid',$user['id']);
                session('username',$user['username']);
                session('logintime',date('Y-m-d H:i:s',$user['logintime']));
                session('loginip',$user['loginip']);
                M('user')->where(array('id'=>$dataup['id']))->save($dataup);
                $this->redirect(MODULE_NAME.'/Index/index');

            }else{

                $this->redirect(MODULE_NAME.'/Login/index');

            }

        }else{

            $this->redirect(MODULE_NAME.'/Login/index');
        }



    }

    public function logout(){

        unset($_SESSION['uid']);
        unset($_SESSION['username']);
        $this->success('退出成功',U(MODULE_NAME.'/Login/index'));

    }


}