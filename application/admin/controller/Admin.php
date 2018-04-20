<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Admin as AdminModel;
class Admin extends Base{
    public function _initialize(){
        $this->_admin = new AdminModel();
    }
    public function index(){
        // $res = db('admin')->field('username')->select();
        $res = $this->_admin->get_list();
        // foreach ($res as $key => $value) {
        //     $data['id']=$value->id;
        //     $data['username']=$value->username;
        //     $data['password']=$value->password;
        //     $result[]=$data;
        // }
        $this->assign('admin_list',$res);
        return view('list');
    }
    public function add(){
    	if(request()->isPost()){
    		$data = input('post.');
            
            $res =  $this->_admin->add_admin($data);
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
