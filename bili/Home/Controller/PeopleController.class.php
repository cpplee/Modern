<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 3:15
 */

namespace Home\Controller;


class PeopleController extends ComController
{

    public function index(){



        $this->listCate();
        $this->display();
    }

}