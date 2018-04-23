<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as AdminModel;
use app\admin\model\Cate as CateModel;
/**
* 
*/
class Base extends Controller
{
	public function _initialize(){
		if(!session('user') || !session('id')){
            $this->error('请登录','login/index');
        }
        $this->_admin = new AdminModel();
        $this->_cate = new CateModel();
	}
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
}