<?php
namespace Admin\Controller;

class AdminController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Admin');
	}

	//列表详情
	public function index(){
		$list = $this->_model->select();
		$this->assign("list",$list);
		$this->display('Admin/index');
	}

	//加载添加页面
	public function add(){
		$this -> display();
	}

	//执行添加操作
	public function doadd(){
		if(!$this->_model->create()){
			$this->error($this->_model->getError());
			exit;
		}
		$username = $_POST['username'];
		$password_hash = md5($_POST['password_hash']);
		$email = $_POST['email'];
		$status = $_POST['status'];
		$arr = array(
			'username' => $username,
			'password_hash' => $password_hash,
			'email' => $email,
			'status' => $status,
			'created_at' => time(),
			'updated_at' => time(),
		);
		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('Admin/index'));
		}else{
			$this->error("添加失败！");
		}
	}
	
	//删除操作
	public function del(){
		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('Admin/index'));
		}else{
			$this->error("删除失败");
		}
	}

	//加载修改页面
	public function edit(){
		$vo = $this->_model->where(array('id'=>array('eq',I('id'))))->find();
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
		$username = $_POST['username'];
		$password_hash = md5($_POST['password_hash']);
		$email = $_POST['email'];
		$status = $_POST['status'];
		$arr = array(
			'id' => $id,
			'username' => $username,
			'password_hash' => $password_hash,
			'email' => $email,
			'status' => $status,
			'updated_at' => time(),
		);
		// var_dump($arr);exit;
		//执行修改 
		if($this->_model->save() >= 0){
			$this->success("修改成功！",U('Admin/index'));
		}else{
			$this->error("修改失败");
		}
	}


}