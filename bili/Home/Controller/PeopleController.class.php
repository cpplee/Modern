<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/29
 * Time: 3:15
 */

namespace Home\Controller;


use Think\Page;

class PeopleController extends ComController
{

    public function index(){


       $count=  M('blog')->count();

        $page = new Page($count,3);

        $limit = $page->firstRow.','.$page->listRows;

        $blog = M('blog')->limit($limit)->select();

        foreach($blog as $key=>$value){
            $blog[$key]['content']= html_entity_decode($blog[$key]['content']);
            //$blog[$key]['content']=mb_substr($blog[$key]['content'],0,100,'utf-8').'...';
        }

      //  p($blog);
        $this->assign('blog',$blog);
        $this->assign('page',$page->show());

        $this->listCate();
        $this->display();
    }

    public function show(){

       // p($_GET);

        $id = $_GET['id'];

        $article = M('blog')->where(array('id'=>$id))->find();

        $article['content']= html_entity_decode($article['content']);

        $this->assign('article',$article);

        $this->display();




    }





}