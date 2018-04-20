<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Admin as AdminModel;
class Admin extends Base
{
    public function index(){
        return view('list');
    }
    public function add(){
    	if(request()->isPost()){
    		$data = [
    			'username'=>input('post.username'),
    			'password'=>md5('salt_'.md5(input('post.password'))),
    		];
            $admin = new AdminModel();
            $res = $admin->addadmin($data);
    		// $res = db('admin')->insert($data);
    		if($res){
    			$this->success('添加成功');
    		}else{
    			$this->error('添加失败');
    		}
    		return;
    	}
    	return view('add');
    }
    public function edit(){
    	return view('edit');
    }
}
