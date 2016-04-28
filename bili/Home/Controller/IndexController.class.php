<?php
namespace Home\Controller;




use Think\Controller;

class IndexController extends ComController{




    public function index(){


        $this->listCate();
        $this->display();
    }


    public function typography(){

        $this->display();
    }



    public function components(){

        $this->display();
    }


    public function pricingbox(){
        $this->display();
    }

    public function contact(){

        $this->display();

    }



}