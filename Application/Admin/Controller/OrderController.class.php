<?php
namespace Admin\Controller;

class OrderController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Order');
	}

	//列表详情
	public function index(){
		$list = $this->_model->select();
		// var_dump($list);exit;
		$this->assign("list",$list);
		$this->display('Order/index');
	}

	//删除操作
	public function del(){
		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('Order/index'));
		}else{
			$this->error("删除失败");
		}
	}

}