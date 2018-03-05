<?php

namespace Home\Controller;

/**
 * 首页控制类
 */

class IndexController extends BaseController {

    public function index(){
        //轮播图
        $banner = M('slideshow')->where(array('is_valid'=>"1"))->order('id desc')->select();
        $this->assign('banner', $banner);

        //关于我们
        // $about = M('About')->select();
        // $this->assign('about', $about);

        //我们的服务
        $service_1 = M('Service')->where(array('is_valid'=>"1"))->limit('3')->select();
        $service_2 = M('Service')->where(array('is_valid'=>"1",'id'=>'4'))->select();
        $service_3 = M('Service')->where(array('is_valid'=>"1",'id'=>array("in","5, 6, 7")))->select();
        $service_4 = M('Service')->where(array('is_valid'=>"1", 'id'=>'8'))->order('id desc')->select();
        // var_dump($service_4);exit;
        $this->assign('service_1', $service_1);
        $this->assign('service_2', $service_2);
        $this->assign('service_3', $service_3);
        $this->assign('service_4', $service_4);

        //商业空间
        $case_shangye = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'1'))->limit('4')->select();
        $this->assign('case_shangye', $case_shangye);
        //娱乐空间
        $case_yule = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'2'))->limit('4')->select();
        $this->assign('case_yule', $case_yule);
        //酒店会所
        $case_jiudian = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'3'))->limit('4')->select();
        $this->assign('case_jiudian', $case_jiudian);
        // var_dump($case_jiudian);exit;
        //住宅空间
        $case_zhuzhai = M('Project')->where(array('is_valid'=>'1', 'type_id'=>'4'))->limit('4')->select();
        $this->assign('case_zhuzhai', $case_zhuzhai);

        //服务流程
        $flow = M('Flow')->where(array('is_valid'=>'1'))->select();
        $this->assign('flow', $flow);
        $flow_1 = M('Flow')->where(array('is_valid'=>'1'))->select();
        $this->assign('flow_1', $flow_1);

        //新闻
        $new = M('New')->where(array('is_valid'=>'1'))->order('id desc')->limit('6')->select();
        $this->assign('new', $new);

    	$this->display();
    }

}