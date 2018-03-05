<?php
namespace Admin\Controller;

class IndexController extends BaseController {

    public function index(){
    	$this->assign("title","网站标题");
       	$this->display();
    }

    public function index2(){
    	$this -> display();
    }

}