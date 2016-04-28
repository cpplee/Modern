<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 0:04
 */

namespace Home\Controller;




use Think\Controller;
use Think\Page;

class ProductController extends ComController
{


    public function index(){






            $count = M('product')->count();
            $page = new Page($count,4);
            $limit = $page->firstRow.','.$page->listRows;
           $productAll =  M('product')->limit($limit)->select();

         //   P($productAll);
            $this->assign('product',$productAll);

        $daohang = M('cate')->select();





        $this->listCate();

        $this->assign('daohang',$daohang);
        $this->assign('page',$page->show());
        $this->display();
    }


    public function productcate(){

        $cid = I('id',0,'intval');

        $producthead = M('cate')->where(array('id'=>$cid))->find();


        $count = M('product')->where(array('cid'=>$cid))->count();
        $page = new Page($count,4);
        $limit = $page->firstRow.','.$page->listRows;

        $product = M('product')->where(array('cid'=>$cid))->limit($limit)->select();

       // p($product);



        $this->listCate();


        $this->assign('product',$product);
        $this->assign('page',$page->show());
        $this->assign('producthead',$producthead);

        $this->display();
    }



}