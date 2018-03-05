<?php
namespace Admin\Controller;

class FlowController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Flow');
	}

	//列表详情
	public function index(){
		$list = $this->_model->select();
		$this->assign("list",$list);
		$this->display('Flow/index');
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
        $title_en = $_POST['title_en'];
        // $content = $_POST['content'];
        $content = $_REQUEST["content"]; //获取文本域
		$is_valid = $_POST['is_valid'];

		$arr = array(
            'title' => $title,
            'img' => $img,
            'title_en' => $title_en,
            'content' => $content,
			'is_valid' => $is_valid,
			'created_time' => time(),
			'updated_time' => time(),
		);
        // var_dump($arr);exit;
		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('Flow/index'));
		}else{
			$this->error("添加失败！");
		}
	}
	//文件上传
    public function fileupload(){
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath = '/img/Flow/'; //  设置附件上传目录
        // $info = $upload->uploadOne($_FILES['img']);
        $info = $upload->upload();

        if(!$info) {//  上传错误提示错误信息
            $this->error($upload->getError());
        }else{//  上传成功
            echo $info['savepath'].$info['savename'];
        }
        $img = $info['img']['savepath'].$info['img']['savename'];
        return $img;
    }

	//删除操作
	public function del(){
		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('Flow/index'));
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
        $title_en = $_POST['title_en'];
        // $content = $_POST['content'];
        $content = $_REQUEST["content"]; //获取文本域
        $is_valid = $_POST['is_valid'];
        $arr = array(
            'id' => $id,
            'title' => $title,
            'title_en' => $title_en,
            'content' => $content,
            'is_valid' => $is_valid,
            'updated_time' => time(),
        );
        // var_dump($arr);exit;
        //执行修改
        if($this->_model->save($arr) >= 0){
            $this->success("修改成功！",U('Flow/index'));
        }else{
            $this->error("修改失败");
        }
	}

	public function show(){
        $vo = $this->_model->where(array('id'=>array('eq',I('id'))))->find();
        $this->assign('vo',$vo);
        $this->display();
    }

    public function fanwei(){
    	$arr = M('About')->find();
		$this->assign('arr',$arr);
		$this->display();
    }

   	//执行修改操作
	public function save_2(){
		if(!M('About')->create()){
			$this->error(M('About')->getError());
			exit;
		}
		$id = $_POST['id'];
		$fanwei = $_POST['fanwei'];
		$arr = array(
			'id' => $id,
			'fanwei' => $fanwei,
			'updated_time' => time(),
		);
		 //var_dump($arr);exit;
		//执行修改 
		if(M('About')->save($arr) >= 0){
			$this->success("修改成功！",U('Flow/fanwei'));
		}else{
			$this->error("修改失败");
		}
	}

    public function youshi(){
    	$arr = M('About')->find();
		$this->assign('arr',$arr);
		$this->display();
    }

   	//执行修改操作
	public function save_3(){
		if(!M('About')->create()){
			$this->error(M('About')->getError());
			exit;
		}
		$id = $_POST['id'];
		$youshi = $_POST['youshi'];
		$arr = array(
			'id' => $id,
			'youshi' => $youshi,
			'updated_time' => time(),
		);
		 //var_dump($arr);exit;
		//执行修改 
		if(M('About')->save($arr) >= 0){
			$this->success("修改成功！",U('Flow/youshi'));
		}else{
			$this->error("修改失败");
		}
	}



}