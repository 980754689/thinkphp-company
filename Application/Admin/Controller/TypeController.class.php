<?php
namespace Admin\Controller;

class TypeController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Type');
	}

	//列表详情
	public function index(){
		$list = $this->_model->select();
		$this->assign("list",$list);
		$this->display('Type/index');
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
		//表单数据
		$title = $_POST['title'];
		$is_valid = $_POST['is_valid'];

		$arr = array(
			'title' => $title,
			'is_valid' => $is_valid,
			'time' => time(),
			'updated_time' => time(),
		);

		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('Type/index'));
		}else{
			$this->error("添加失败！");
		}
	}

	//删除操作
	public function del(){
		// $id = $_GET['id'];
		//判断下面又没有数据 有则删除不了
		// $arr = M('Case')->where(array('id'=>array('eq',I('id'))))->find();
		// if () {
		// 	# code...
		// }
		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('Type/index'));
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

        //表单数据
        $id = $_POST['id'];
        $title = $_POST['title'];
        $is_valid = $_POST['is_valid'];
        $arr = array(
            'id' => $id,
            'title' => $title,
            'is_valid' => $is_valid,
            'updated_time' => time(),
        );
        //var_dump($arr);exit;
        //执行修改
        if($this->_model->save($arr) >= 0){
            $this->success("修改成功！",U('Type/index'));
        }else{
            $this->error("修改失败");
        }
	}

	public function demo(){}


}