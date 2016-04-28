<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 3:19
 */

namespace Home\Controller;


class QualityController extends ComController
{


    public function index(){

        $this->listCate();
        $this->display();

    }


}