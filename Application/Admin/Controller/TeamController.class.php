<?php
namespace Admin\Controller;

class TeamController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('Team');
	}

	//列表详情
	public function index(){
		$list = $this->_model->select();
        // var_dump($list);exit;
		$this->assign("list",$list);
		$this->display('Team/index');
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
        $name = $_POST['name'];
        $zhicheng = $_POST['zhicheng'];
        $jianjie = $_REQUEST["jianjie"]; //获取文本域
        $exper = $_REQUEST["exper"]; //获取文本域
        $fenge = $_REQUEST["fenge"]; //获取文本域
        // $fenge = $_POST['fenge'];

        $work_time = $_POST['work_time'];
        // $content = $_POST['content'];
		$is_valid = $_POST['is_valid'];

		$arr = array(
            'name' => $name,
            'img' => $img,
            'zhicheng' => $zhicheng,
            'jianjie' => $jianjie,
            'fenge' => $fenge,
            'exper' => $exper,

            'work_time' => $work_time,
			'is_valid' => $is_valid,

			'created_time' => time(),
			'updated_time' => time(),
		);
        // var_dump($arr);exit;
		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('Team/index'));
		}else{
			$this->error("添加失败！");
		}
	}
	//文件上传
    public function fileupload(){
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath = '/img/team/'; //  设置附件上传目录
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
			$this->success("删除成功！",U('Team/index'));
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
            $name = $_POST['name'];
            $zhicheng = $_POST['zhicheng'];
            $jianjie = $_REQUEST["jianjie"]; //获取文本域
            $exper = $_REQUEST["exper"]; //获取文本域
            $fenge = $_REQUEST["fenge"]; //获取文本域
            // $fenge = $_POST[''];

            $work_time = $_POST['work_time'];
            // $content = $_POST['content'];
            $is_valid = $_POST['is_valid'];
            $arr = array(
                'id' => $id,
                'name' => $name,
                'zhicheng' => $zhicheng,
                'jianjie' => $jianjie,
                'fenge' => $fenge,
                'exper' => $exper,

                'work_time' => $work_time,
                'is_valid' => $is_valid,

                'updated_time' => time(),
            );
            // var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('Team/index'));
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
            $name = $_POST['name'];
            $zhicheng = $_POST['zhicheng'];
            $jianjie = $_REQUEST["jianjie"]; //获取文本域
            $exper = $_REQUEST["exper"]; //获取文本域
            $fenge = $_REQUEST["fenge"]; //获取文本域
            // $fenge = $_POST['fenge'];

            $work_time = $_POST['work_time'];
            // $content = $_POST['content'];
            $is_valid = $_POST['is_valid'];
            $arr = array(
                'id' => $id,
                'img' => $img,
                'name' => $name,
                'zhicheng' => $zhicheng,
                'jianjie' => $jianjie,
                'fenge' => $fenge,
                'exper' => $exper,

                'work_time' => $work_time,
                'is_valid' => $is_valid,

                'updated_time' => time(),
            );
            //var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('Team/index'));
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