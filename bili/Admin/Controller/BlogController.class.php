<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/3
 * Time: 22:03
 */

namespace Admin\Controller;


use Think\Controller;
use Think\Page;
use Think\Upload;

class BlogController extends BaseController
{


    public function index(){



        $count=M('blog')->count();
        $page = new Page($count,2);

        $limit = $page->firstRow.','.$page->listRows;
        $blog = M('blog')->limit($limit)->select();



        foreach($blog as $key=>$value){

            $blog[$key]['content']=mb_substr($blog[$key]['content'],0,100,'utf-8').'...';
        }

        $this->assign('blog',$blog);
        $this->assign('page',$page->show());
        $this->display();


    }



    public function add(){


    $this->display();

    }



    public function upload(){

        $upload = new Upload();
        $upload->maxSize = 3145728 ;// 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->autoSub = true;
        $upload->savePath = './image/'; // 设置附件上传目录
        $upload->subName=array('date','Ymd');
        $info = $upload->upload();
        //  p($upload->savePath);

           // p($info);



        if ($info) { //上传文件保存路径

            $temp = substr($info['upfile']['savepath'],8);
            $tempurl = $temp.$info['upfile']['savename'];

           // p($tempurl);

            echo json_encode(array(
                'url' => $tempurl,
                'title' => htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
                'original' => $info['upfile']['name'],
                'state' => 'SUCCESS',
                'type' => $info['upfile']['type'],
                'size' => $info['upfile']['size']
            ));
        }else{
            echo json_encode(array(
                'state' => $upload->getErrorMsg()
            ));
        }

    }
    public function addBlog(){
          if(!IS_POST) $this->error('非法提交!');
       // p($_POST);
        $data = array(
            'blogfirsttitle'=>I('blogfirsttitle'),
            'blogsecondtitle'=>I('blogsecondtitle'),
            'blogcate'=>I('blogcate'),
            'content'=>I('content'),
            'time'=>time(),
            'click'=>I('click',0,'intval')


        );

         $result = M('blog')->add($data);
         if($result){
             $this->error('添加博文成功!',U(MODULE_NAME.'/Blog/index'));
         }else{

             $this->error('添加博文失败!',U(MODULE_NAME.'/Blog/index'));
         }


    }

    public function delete(){

        if(!IS_GET) $this->error('非法提交!');

        $id=I('id');


        $result=M('blog')->where(array('id'=>$id))->delete();

        if($result){
            $this->success('删除成功!');
        }else{
            $this->error('删除失败!');
        }

    }



}