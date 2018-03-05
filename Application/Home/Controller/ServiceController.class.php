<?php

namespace Home\Controller;

/**
 * 关于我们控制类
 */

class ServiceController extends BaseController {

    public function index(){

    	$this->display();
    }

    public function liucheng(){
        //服务流程
        $flow = M('Flow')->where(array('is_valid'=>'1'))->select();
        $this->assign('flow', $flow);
        $flow_1 = M('Flow')->where(array('is_valid'=>'1'))->select();
        $this->assign('flow_1', $flow_1);

    	$this->display();
    }

    public function youshi(){
 
    	$this->display();
    }

}