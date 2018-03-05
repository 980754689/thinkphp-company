<?php

namespace Home\Controller;

/**
 * 新闻资讯控制类
 */

class NewController extends BaseController {

    public function index(){
        $arr = M('New')->where(array('is_valid'=>'1'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }

    public function wenti(){
        $arr = M('New')->where(array('is_valid'=>'1','type_id'=>'2'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }

    public function gongsi(){
        $arr = M('New')->where(array('is_valid'=>'1','type_id'=>'0'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }


    public function hangye(){
        $arr = M('New')->where(array('is_valid'=>'1','type_id'=>'1'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }

    public function details(){
        $arr = M('New')->where(array('id'=>array('eq', I('id'))))->find();
        $this->assign('arr', $arr);
        // var_dump($arr);exit;
        $this->display();
    }
}