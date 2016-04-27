<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {


    public function index(){
    //    p(__MODULE__);
      //  p(U('index'));


//P(__ROOT__.'/bili/Public/404.html');

  //p(APP_PATH);

//        if(!IS_POST) redirect(__ROOT__.'/bili/Public/404.html');


        $this->display();

    }
}