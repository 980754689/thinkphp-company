<?php

namespace Home\Controller;

/**
 * 案例控制类
 */

class CaseController extends BaseController {

    public function index(){
        $arr = M('Project')->where(array('is_valid'=>'1'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }

    public function jiudian(){
        $arr = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'3'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }

    public function shangye(){
        $arr = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'1'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }

    public function yule(){
        $arr = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'2'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }

    public function zhuzhai(){
        $arr = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'4'))->select();
        $this->assign('arr', $arr);
    	$this->display();
    }
    //详情页
    public function details(){

        $arr = M('Project')->where(array('id'=>array('eq', I('id'))))->find();
        $this->assign('arr', $arr);
        
        $this->display();
    }
}