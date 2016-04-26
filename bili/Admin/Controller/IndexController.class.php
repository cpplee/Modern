<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        p(__MODULE__);
        p(U('index'));
      $this->display();

    }
}