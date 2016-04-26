<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/4/26
 * Time: 19:43
 */

namespace Admin\Controller;


use Think\Controller;
use Cla\Category;
use Think\Page;

class CategoryController extends Controller
{


    public function index(){

        import('Cla.Category');

        $count = M('cate')->count();
        $page = new Page($count,3);

        $limit = $page->firstRow.','.$page->listRows;
        $cate = M('cate')->limit($limit)->select();
        $cate = Category::unlimitForLevel($cate,'&nbsp;&nbsp;--');
        $this->assign('cate',$cate);
        $this->assign('page',$page->show());

        $this->display();
    }

    public function add(){

        $pid=I('pid',0,'intval');

        $this->assign('pid',$pid);

        $this->display();
    }



    public function runAddCate(){

        if(M('cate')->add($_POST)){
            $this->success('添加成功',U(MODULE_NAME.'/Category/index'));
        }else{
            $this->error('添加失败');
        }
    }

}