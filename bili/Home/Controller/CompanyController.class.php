<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 3:05
 */

namespace Home\Controller;

use Think\Controller;
class CompanyController extends ComController
{




    public function index(){

    $this->listCate();
      $this->display();

    }


}