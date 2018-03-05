<?php
namespace Admin\Controller;

class JobController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Job');
	}

	//列表详情
	public function index(){
		$list = $this->_model->select();
		$this->assign("list",$list);
		$this->display('Job/index');
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
        $num = $_POST['num'];
        $work_time = $_POST['work_time'];
        $pay = $_POST['pay'];
        $email = $_POST['email'];

        $ask = $_REQUEST["ask"]; //获取文本域
        $zhize = $_REQUEST["zhize"]; //获取文本域

		$is_valid = $_POST['is_valid'];

		$arr = array(
            'title' => $title,
            'num' => $num,
            'pay' => $pay,
            'work_time' => $work_time,
            'email' => $email,

            'ask' => $ask,
            'zhize' => $zhize,

			'is_valid' => $is_valid,

			'created_time' => time(),
			'updated_time' => time(),
		);
        // var_dump($arr);exit;
		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('Job/index'));
		}else{
			$this->error("添加失败！");
		}
	}

	//删除操作
	public function del(){

		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('Job/index'));
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
        $num = $_POST['num'];
        $work_time = $_POST['work_time'];
        $pay = $_POST['pay'];
        $email = $_POST['email'];

        $ask = $_REQUEST["ask"]; //获取文本域
        $zhize = $_REQUEST["zhize"]; //获取文本域

        $is_valid = $_POST['is_valid'];
        $arr = array(
            'id' => $id,
            'title' => $title,
            'pay' => $pay,
            'num' => $num,
            'work_time' => $work_time,
            'email' => $email,

            'ask' => $ask,
            'zhize' => $zhize,

            'is_valid' => $is_valid,

            'updated_time' => time(),
        );
        // var_dump($arr);exit;
        //执行修改
        if($this->_model->save($arr) >= 0){
            $this->success("修改成功！",U('Job/index'));
        }else{
            $this->error("修改失败");
        }

	}

	public function show(){
        $vo = $this->_model->where(array('id'=>array('eq',I('id'))))->find();
        $this->assign('vo',$vo);
        $this->display();
    }

    public function zhan(){
        $arr = M('Job_zhan')->find();
        $this->assign('arr',$arr);
        $this->display();
    }

    //执行修改操作
    public function save_3(){
        if(!M('Job_zhan')->create()){
            $this->error(M('Job_zhan')->getError());
            exit;
        }
        if (empty($POST['id'])) {
            $id= 1;
        }else{
            $id=$_POST['id'];
        }

        $content = $_POST['content'];
        // $is_valid = $_POST['is_valid'];
        $arr = array(
            'id' => $id,

            'content' => $content,
            'updated_time' => time(),
        );
         // var_dump($arr);exit;
        //执行修改 
        if(M('Job_zhan')->save($arr) >= 0){
            $this->success("修改成功！",U('Job/zhan'));
        }else{
            $this->error("修改失败");
        }
    }

}