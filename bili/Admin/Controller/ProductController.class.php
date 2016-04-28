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


    public function deletePic(){

          $id = I('id');

        $oldpic = M('product')->where(array('id'=>$id))->find();
        $picurl = $oldpic['pic'];
        if($picurl){
        //    p(__ROOT__.$picurl);
      //  p(__FILE__);
       // $picstr = dirname(dirname(dirname(dirname(__FILE__))));
        //p($picurl);
            @unlink('.'.$picurl);
            if($result=M('product')->where(array('id'=>$id))->delete()){
                $this->success('删除成功');
            }else{
                $this->error('删除失败');
            }


        }else{
            $this->error('图片不存在');
        }


  }

}