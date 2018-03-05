<?php 
namespace Admin\Controller;

use \Think\Controller;
class PublicController extends Controller
{

	//执行登陆
	public function dologin()
	{
		//接收用户名和密码
		$username = I('post.username');
		$password = I('post.password_hash');

		//验证
		$user = M('Admin');
		$data = $user->where(array('username'=>$username))->find();
		if (!$data) {
			$this->error('用户名不存在！');
			exit;
		}
		//验证密码
		if ($data['password_hash'] != md5($password)) {
			$this->error('密码不正确');
			exit;
		}
		//把用户信息添加到session
		$_SESSION['admin_user'] = $data;

		// 执行验证码操作
		$this->check_verify();
		$this->redirect('Index/index');
	}

	//退出登陆
	public function logout()
	{
		unset($_SESSION['admin_user']);
		$this->redirect('Index/index');
	}
	
	//验证码
	public function Verify_c(){
		ob_clean();
        $config = array(
		'fontSize' => 30, // 验证码字体大小
		'length' => 4, // 验证码位数
		'useNoise' => false, // 关闭验证码杂点
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}

	// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
	public function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}

}