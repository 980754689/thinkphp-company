<?php
namespace Admin\Controller;

class ProductController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Product');
	}

	//列表详情
	public function index(){
		$list = $this->_model->select();
		$this->assign("list",$list);
		$this->display('Product/index');
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
        $content = $_POST['content'];
		$pay = $_POST['pay'];
		$is_valid = $_POST['is_valid'];

		//发布人
		$user_id = $_SESSION['admin_user']['id'];
		$user_name = $_SESSION['admin_user']['username'];

		$arr = array(
            'title' => $title,
            'content' => $content,
			'pay' => $pay,
            'img_1' => $img,
			'is_valid' => $is_valid,
            'user_id' => $user_id,
            'user_name' => $user_name,
			'created_time' => time(),
			'updated_time' => time(),
		);
        // var_dump($arr);exit;
		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('Product/index'));
		}else{
			$this->error("添加失败！");
		}
	}
	//文件上传
    public function fileupload(){
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath = '/product/'; //  设置附件上传目录
        // $info = $upload->uploadOne($_FILES['img']);
        $info = $upload->upload();

        if(!$info) {//  上传错误提示错误信息
            $this->error($upload->getError());
        }else{//  上传成功
            echo $info['savepath'].$info['savename'];
        }
        $img = $info['img_1']['savepath'].$info['img_1']['savename'];
        return $img;
    }

	//删除操作
	public function del(){
        //删除之前图片
        $id = $_GET['id'];
        $arr = $this->_model->where(array('id'=>$id))->find();
        $delPic='Public'.$arr['img_1'];
        unlink($delPic);

		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('Product/index'));
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
		if(empty($_FILES['img_1']['name'])){
            //表单数据
            $id = $_POST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];
            $pay = $_POST['pay'];
            $is_valid = $_POST['is_valid'];
            //发布人
            $user_id = $_SESSION['admin_user']['id'];
            $user_name = $_SESSION['admin_user']['username'];
            $arr = array(
                'id' => $id,
                'title' => $title,
                'content' => $content,
                'pay' => $pay,
                'user_id' => $user_id,
                'user_name' => $user_name,
                'is_valid' => $is_valid,
                'updated_time' => time(),
            );
            // var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('Product/index'));
            }else{
                $this->error("修改失败");
            }

        }else{
		    //删除之前图片
            $id = $_POST['id'];
            $arr = $this->_model->where(array('id'=>$id))->find();
            $delPic='Public'.$arr['img_1'];
            unlink($delPic);

            $img = $this->fileupload();
            //表单数据
            $title = $_POST['title'];
            $content = $_POST['content'];
            $pay = $_POST['pay'];
            $is_valid = $_POST['is_valid'];
            //发布人
            $user_id = $_SESSION['admin_user']['id'];
            $user_name = $_SESSION['admin_user']['username'];
            $arr = array(
                'id' => $id,
                'title' => $title,
                'content' => $content,
                'pay' => $pay,
                'img_1' => $img,
                'url' => $url,
                'user_id' => $user_id,
                'user_name' => $user_name,
                'is_valid' => $is_valid,
                'updated_time' => time(),
            );
            //var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('Product/index'));
            }else{
                $this->error("修改失败");
            }
        }

	}

	public function demo(){}


}