<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 3:23
 */

namespace Home\Controller;


class ContactController extends ComController
{


    public function index(){

        $this->listCate();
        $this->display();
    }


}