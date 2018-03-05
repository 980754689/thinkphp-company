<?php
namespace Admin\Controller;

class AboutController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('About');
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
        $tel = $_POST['tel'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$qq = $_POST['qq'];
		$wechat = $_POST['wechat'];
		$work_time = $_POST['work_time'];
		$address = $_POST['address'];
		$company = $_POST['company'];
		$arr = array(
			'id' => $id,
			'tel' => $tel,
			'phone' => $phone,
			'email' => $email,
			'qq' => $qq,
			'wechat' => $wechat,
			'work_time' => $work_time,
			'address' => $address,
			'company' => $company,
			'updated_time' => time(),
		);
		 //var_dump($arr);exit;
		//执行修改 
		if($this->_model->save($arr) >= 0){
			$this->success("修改成功！",U('About/index'));
		}else{
			$this->error("修改失败");
		}
	}

	public function jianjie(){
		$arr = $this->_model->find();
		$this->assign('arr',$arr);
		$this->display();
	}

	//执行修改操作
	public function save_1(){
		if(!$this->_model->create()){
			$this->error($this->_model->getError());
			exit;
		}
		$id = $_POST['id'];
		$jianjie = $_POST['jianjie'];
		$arr = array(
			'id' => $id,
			'jianjie' => $jianjie,
			'updated_time' => time(),
		);
		 //var_dump($arr);exit;
		//执行修改 
		if($this->_model->save($arr) >= 0){
			$this->success("修改成功！",U('About/jianjie'));
		}else{
			$this->error("修改失败");
		}
	}

	public function wenhua(){
		$arr = $this->_model->find();
		$this->assign('arr',$arr);
		$this->display();
	}

	//执行修改操作
	public function save_2(){
		if(!$this->_model->create()){
			$this->error($this->_model->getError());
			exit;
		}
		$id = $_POST['id'];
		$wenhua = $_POST['wenhua'];
		$arr = array(
			'id' => $id,
			'wenhua' => $wenhua,
			'updated_time' => time(),
		);
		 //var_dump($arr);exit;
		//执行修改 
		if($this->_model->save($arr) >= 0){
			$this->success("修改成功！",U('About/wenhua'));
		}else{
			$this->error("修改失败");
		}
	}

	public function fazhan(){
		$arr = $this->_model->find();
		$this->assign('arr',$arr);
		$this->display();
	}

	//执行修改操作
	public function save_3(){
		if(!$this->_model->create()){
			$this->error($this->_model->getError());
			exit;
		}
		$id = $_POST['id'];
		$fazhan = $_POST['fazhan'];
		$arr = array(
			'id' => $id,
			'fazhan' => $fazhan,
			'updated_time' => time(),
		);
		 //var_dump($arr);exit;
		//执行修改 
		if($this->_model->save($arr) >= 0){
			$this->success("修改成功！",U('About/fazhan'));
		}else{
			$this->error("修改失败");
		}
	}

}