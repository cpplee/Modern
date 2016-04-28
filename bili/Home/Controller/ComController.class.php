<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 1:39
 */

namespace Home\Controller;


use Think\Controller;

class ComController extends Controller
{




    public function listCate(){

          $cate = M('cate')->select();
        $this->assign('cate',$cate);
    }

}