<?php
namespace app\admin\controller;
use app\admin\controller\Base;
use app\admin\model\Admin as AdminModel;
class Admin extends Base{
    public function _initialize(){
        $this->_admin = new AdminModel();
    }
    public function index(){
        $res = $this->_admin->get_list();
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
    public function edit($id){
        if(!$id){
            $this->error('参数非法');
        }
        $res=$this->_admin->getAdminById($id);
        if(!$res){
            $this->error('管理员不存在');
        }
        
        if(request()->isPost()){
            $data = input('post.');
            $data['password'] = $res['password'] == $data['password'] ? $data['password'] : md5('salt_'.md5($data['password']));
            $res = $this->_admin->updateAdmin($data);
            if($res){
                $this->success('修改成功');
            }
            return;
        }
        $this->assign('admin',$res);
    	return view('edit');
    }
}
