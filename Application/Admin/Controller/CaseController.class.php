<?php
namespace Admin\Controller;

class CaseController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Project');
	}

    public function index(){

        $count = $this->_model->count();// 查询满足要求的总记录数 ($map表示查询条件)
        $p = $this->getpage($count,10);
        // print_r($p);
        $list = $this->_model->order('id')->limit($p->firstRow.','.$p->listRows)->select(); // $Page->firstRow 起始条数 $Page->listRows 获取多少条
        $this->assign('list', $list); // 赋值数据集
        // print_r($list);
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display();
    }

    function getpage($count, $pagesize = 10) {
        $p = new \Think\Page($count, $pagesize);
        $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
        $p->setConfig('prev', '上一页');
        $p->setConfig('next', '下一页');
        $p->setConfig('last', '末页');
        $p->setConfig('first', '首页');
        $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
        $p->lastSuffix = false;//最后一页不显示为总页数
        return $p;
    }

	//加载添加页面
	public function add(){
		$this -> display();
	}

	//执行添加操作
	public function doadd(){

        $img = $this->fileupload();

        if(!$this->_model->create()){
            $this->error($this->_model->getError());
            exit;
        }
		//表单数据
        $title = $_POST['title'];
        $address = $_POST['address'];
        $area = $_POST['area'];
        $seat = $_POST['seat'];
        // $content = $_POST['content'];
        $content = $_REQUEST["content"]; //获取文本域
        $type_id = $_POST['type_id'];
		$is_valid = $_POST['is_valid'];

		//发布人
		$user_id = $_SESSION['admin_user']['id'];
		$user_name = $_SESSION['admin_user']['username'];

		$arr = array(
            'title' => $title,
            'img' => $img,
            'address' => $address,
            'area' => $area,
            'seat' => $seat,
            'content' => $content,
            'type_id' => $type_id,
			'is_valid' => $is_valid,
            'user_id' => $user_id,
            'user_name' => $user_name,
			'created_time' => time(),
			'updated_time' => time(),
		);
        // var_dump($arr);exit;
		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('Case/index'));
		}else{
			$this->error("添加失败！");
		}
	}
	//文件上传
    public function fileupload(){
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath = '/img/Case/'; //  设置附件上传目录
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
        //删除之前图片
        $id = $_GET['id'];
        $arr = $this->_model->where(array('id'=>$id))->find();
        $delPic='Public'.$arr['img'];
        unlink($delPic);

		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('Case/index'));
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
		if(empty($_FILES['img']['name'])){
            //表单数据
            $id = $_POST['id'];
            $title = $_POST['title'];
            $address = $_POST['address'];
            $area = $_POST['area'];
            $seat = $_POST['seat'];
            // $content = $_POST['content'];
            $content = $_REQUEST["content"]; //获取文本域
            $type_id = $_POST['type_id'];
            $is_valid = $_POST['is_valid'];
            //发布人
            $user_id = $_SESSION['admin_user']['id'];
            $user_name = $_SESSION['admin_user']['username'];
            $arr = array(
                'id' => $id,
                'title' => $title,
                'address' => $address,
                'area' => $area,
                'seat' => $seat,
                'content' => $content,
                'type_id' => $type_id,
                'user_id' => $user_id,
                'user_name' => $user_name,
                'is_valid' => $is_valid,
                'updated_time' => time(),
            );
            // var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('Case/index'));
            }else{
                $this->error("修改失败");
            }

        }else{
		    //删除之前图片
            $id = $_POST['id'];
            $arr = $this->_model->where(array('id'=>$id))->find();
            $delPic='Public'.$arr['img'];
            unlink($delPic);

            $img = $this->fileupload();
            //表单数据
            $title = $_POST['title'];
            $address = $_POST['address'];
            $area = $_POST['area'];
            $seat = $_POST['seat'];
            // $content = $_POST['content'];
            $content = $_REQUEST["content"]; //获取文本域
            $type_id = $_POST['type_id'];
            $is_valid = $_POST['is_valid'];
            //发布人
            $user_id = $_SESSION['admin_user']['id'];
            $user_name = $_SESSION['admin_user']['username'];
            $arr = array(
                'id' => $id,
                'title' => $title,
                'address' => $address,
                'area' => $area,
                'seat' => $seat,
                'content' => $content,
                'type_id' => $type_id,
                'img' => $img,
                'user_id' => $user_id,
                'user_name' => $user_name,
                'is_valid' => $is_valid,
                'updated_time' => time(),
            );
            //var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('Case/index'));
            }else{
                $this->error("修改失败");
            }
        }

	}

	public function show(){
        $vo = $this->_model->where(array('id'=>array('eq',I('id'))))->find();
        $this->assign('vo',$vo);
        $this->display();
    }


}