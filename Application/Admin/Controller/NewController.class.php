<?php
namespace Admin\Controller;

class NewController extends BaseController {

	private $_model = null; //数据库操作类

	//初始化操作
	public function _initialize(){
		parent::_initialize();
		$this->_model = D('New');
	}

	//列表详情
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
		if(!$this->_model->create()){
			$this->error($this->_model->getError());
			exit;
		}
		$img = $this->fileupload();

		$title = $_POST['title'];
		$content_1 = $_POST['content_1'];
		$content_2 = $_POST['content_2'];
		$is_valid = $_POST['is_valid'];
		$type_id = $_POST['type_id'];
		$seat = $_POST['seat'];
		$user_id = $_SESSION['admin_user']['id'];
		$user_name = $_SESSION['admin_user']['username'];

		$arr = array(
			'img' => $img,
			'title' => $title,
			'content_1' => $content_1,
			'content_2' => $content_2,
			'user_id' => $user_id,
			'user_name' => $user_name,
			'is_valid' => $is_valid,
			'type_id' => $type_id,
			'seat' => $seat,
			'created_time' => time(),
			'updated_time' => time(),
		);
		// var_dump($arr);exit;
		if($this->_model->add($arr) > 0){
			$this->success("添加成功！",U('New/index'));
		}else{
			$this->error("添加失败！");
		}
	}
	
	//删除操作
	public function del(){
	    //删除之前图片
        $id = $_POST['id'];
        $arr = $this->_model->where(array('id'=>$id))->find();
        $delPic='Public'.$arr['img'];
        unlink($delPic);

		if($this->_model->delete($_GET['id']) > 0 ){
			$this->success("删除成功！",U('New/index'));
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

	//查看页面
	public function show(){
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
			$content_1 = $_POST['content_1'];
			$content_2 = $_POST['content_2'];
			$is_valid = $_POST['is_valid'];
			$type_id = $_POST['type_id'];
			$seat = $_POST['seat'];
			$user_id = $_SESSION['admin_user']['id'];
			$user_name = $_SESSION['admin_user']['username'];
            $arr = array(
                'id' => $id,
				'title' => $title,
				'content_1' => $content_1,
				'content_2' => $content_2,
				'user_id' => $user_id,
				'user_name' => $user_name,
				'is_valid' => $is_valid,
				'type_id' => $type_id,
				'seat' => $seat,
				'updated_time' => time(),
            );
            // var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('New/index'));
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
			$content_1 = $_POST['content_1'];
			$content_2 = $_POST['content_2'];
			$is_valid = $_POST['is_valid'];
			$type_id = $_POST['type_id'];
			$seat = $_POST['seat'];
			$user_id = $_SESSION['admin_user']['id'];
			$user_name = $_SESSION['admin_user']['username'];
            $arr = array(
                'id' => $id,
				'img' => $img,
				'title' => $title,
				'content_1' => $content_1,
				'content_2' => $content_2,
				'user_id' => $user_id,
				'user_name' => $user_name,
				'is_valid' => $is_valid,
				'type_id' => $type_id,
				'seat' => $seat,
				'updated_time' => time(),
            );
            //var_dump($arr);exit;
            //执行修改
            if($this->_model->save($arr) >= 0){
                $this->success("修改成功！",U('New/index'));
            }else{
                $this->error("修改失败");
            }
        }
	}

	// 图片上传逻辑
	public function upload0() {

        $file = Request::instance()->file('file');
        // 把图片上传到指定的文件夹中
        $info = $file->move('upload');

        if($info && $info->getPathname()) {
            $data = [
                'status' => 1,
                'message' => 'OK',
                'data' => '/'.$info->getPathname(),
            ];
            echo json_encode($data);exit;
        }

        echo json_encode(['status' => 0, 'message' => '上传失败']);

    }

	//文件上传
    public function fileupload(){
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728 ;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->savePath = '/img/New/'; //  设置附件上传目录
        // $info = $upload->uploadOne($_FILES['img']);
        $info = $upload->upload();
        // var_dump($info);exit;
        if(!$info) {//  上传错误提示错误信息
            $this->error($upload->getError());
        }else{//  上传成功
            echo $info['savepath'].$info['savename'];
        }
        $img = $info['img']['savepath'].$info['img']['savename'];
        return $img;
    }


	//图像上传处理
	// public function uploadify() {
	//   if (!empty($_FILES)) {
	//     //图片上传设置
	//     $config = array(
	//       'maxSize'    =>    3145728,
	//       'savePath'   =>    '',
	//       'saveName'   =>    array('uniqid',''),
	//       'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
	//       'autoSub'    =>    true,
	//       'subName'    =>    array('date','Ymd'),
	//     );
	//     $upload = new ThinkUpload($config);// 实例化上传类
	//     $info = $upload->upload();
	//     if(!$info) {
	//       //上传错误提示信息
	//       $this->error($upload->getError());
	//     } else {
	//       foreach($info as $file){
	//         echo $file['savepath'].$file['savename'];
	//       }
	//     }
	//   }
	// }
    public function uploadify(){
	    if (!empty($_FILES)) {
	        import("@.ORG.UploadFile");
	        $upload = new \Org\UploadFile();
	        $upload->maxSize = 2048000;
	        $upload->allowExts = array('jpg','jpeg','gif','png');
	        $upload->savePath = "./Public/images/";
	        $upload->thumb = true; //设置缩略图
	        $upload->imageClassPath = "@.ORG.Image";
	        $upload->thumbPrefix = "130_,75_,24_"; //生成多张缩略图
	        $upload->thumbMaxWidth = "130,75,24";
	        $upload->thumbMaxHeight = "130,75,24";
	        $upload->saveRule = uniqid; //上传规则
	        $upload->thumbRemoveOrigin = true; //删除原图
	        if(!$upload->upload()){
	            $this->error($upload->getErrorMsg());//获取失败信息
	        } else {
	            $info = $upload->getUploadFileInfo();//获取成功信息
	        }
	        echo $info[0]['savename'];    //返回文件名给JS作回调用
	    }
	}


}