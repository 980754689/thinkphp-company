<?php

namespace Home\Controller;

/**
 * 人才招聘控制类
 */

class JobController extends BaseController {

    public function index(){
    	$arr = M('Job_zhan')->find();
    	$this->assign('arr', $arr);
    	$this->display();
    }

    public function pin(){
    	$arr=M('Job')->where(array('is_valid'=>'1'))->select();
    	$this->assign('arr', $arr);
    	$this->display();
    }

}