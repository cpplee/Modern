<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/26
 * Time: 20:23
 */

namespace Admin\Controller;

use Think\Controller;
use Think\Upload;


class ProductController extends Controller
{


    public function index(){

        $product = M('product')->select();

      //  p($product);
        $this->assign('product',$product);

        $this->display();
    }


    public function add(){



        $this->display();
    }



    public function addRun(){

        if(!IS_POST) redirect(__ROOT__.'/bili/Public/404.html');

         $upload = new Upload();
         $upload->maxSize = 3145728 ;// 设置附件上传大小
         $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
         $upload->autoSub = true;
         $upload->savePath = ''; // 设置附件上传目录

      //  p($upload->savePath);

        $data=array();
        $data['productname']=$_POST['productName'];
        $data['pictitle']=$_POST['picTitle'];
        $data['picalt']=$_POST['picAlt'];
        $data['datatype']=$_POST['dataType'];
        $data['cid']=$_POST['cid'];
        $info = $upload->upload();
        $data['pic'] = '/Uploads/'.$info['pic']['savepath'].$info['pic']['savename'];

         if(!$info) {
            $this->error($upload->getError());
         }else{

             M('product')->data($data)->add();

           $this->success('上传成功！ ');
         }

    }


}