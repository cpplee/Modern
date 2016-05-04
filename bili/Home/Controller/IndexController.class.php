<?php
namespace Home\Controller;




use Think\Controller;

class IndexController extends ComController{




    public function index(){


       $product =  M('product')->order('id DESC')->limit(4)->select();

       // p($product);
        $this->assign('product',$product);

        $this->listCate();
        $this->display();
    }


   public function search(){

       $search = I('search');
       $search = '%'.$search.'%';
       p($search);
       $where['productname'] = array('like',$search);

       $result = M('product')->where($where)->find();

       $this->redirect(MODULE_NAME.'/Product/productcate/id/'.$result['cid']);

   }



}