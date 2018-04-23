<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Admin as AdminModel;

class Login extends Base{
	public function _initialize(){
		$this->_login = new AdminModel();
	}
	function index(){
		if(request()->isPost()){
			$res = $this->_login->login(input('post.'));
			switch ($res) {
				case 1:
					$this->error('登陆失败,用户不存在');
					break;
				case 2:
					$this->success('登陆成功','index/index');
					break;
				case 3:
					$this->error('登陆失败，密码错误');
					break;
				default:
					$this->error('未知错误，请重试');
					break;
			}
			return;
		}
		return view('login');
	}
}