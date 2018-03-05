<?php

namespace Home\Controller;

/**
 * 专家团队控制类
 */

class TeamController extends BaseController {

    public function index(){
    	$team = M('team')->where(array('is_valid'=>'1') )->select();
    	$this->assign('team', $team);

    	$this->display();
    }

    public function details(){
    	$team = M('Team')->where(array('id'=>array('eq', I('id')) ))->find();
    	$this->assign('team', $team);
    	$this->display();
    }

}