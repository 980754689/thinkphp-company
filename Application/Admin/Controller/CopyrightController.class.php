<?php
namespace Admin\Controller;

class CopyrightController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Copyright');
	}

	//列表详情
	public function index(){
		$vo = $this->_model->find();
		$this->assign('vo',$vo);
		$this->display();
	}

	//执行修改操作
	public function save(){
		if(!$this->_model->create()){
			$this->error($this->_model->getError());
			exit;
		}
		$id = $_POST['id'];
        $time = $_POST['time'];
		$url = $_POST['url'];
		$ip = $_POST['ip'];
		$company = $_POST['company'];
		$arr = array(
			'id' => $id,
			'time' => $time,
			'url' => $url,
			'ip' => $ip,
			'qq' => $qq,
			'company' => $company,
		);
		 //var_dump($arr);exit;
		//执行修改 
		if($this->_model->save($arr) >= 0){
			$this->success("修改成功！",U('Copyright/index'));
		}else{
			$this->error("修改失败");
		}
	}


}