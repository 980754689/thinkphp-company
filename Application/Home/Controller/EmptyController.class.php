<?php
namespace Admin\Controller;
use \Think\Controller;

class EmptyController extends Controller
{
	public function _empty($name){

		echo "错误页面";exit;
		// $this->assign('title','错误页面');
		// $this->display('Public/error-404');
	}
}