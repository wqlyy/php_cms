<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class AuthGroup extends Base{
	public function index(){
		$authres = $this->_authgroup->paginate(6);
		$this->assign('authres',$authres);

		return view('list');
	}
	public function add(){
		if(request()->isPost()){
			$data = input('post.');
			if(!isset($data['status'])){
				$data['status']=0;
			}
			if(isset($data['rules'])){
				$data['rules'] = implode(',',$data['rules']);
			}
			$res = $this->_authgroup->save($data);
			if($res){
				$this->success('用户组添加成功','index');
			}else{
				$this->error('用户组添加失败');
			}
			return;
		}
		$authRule = new \app\admin\model\AuthRule();
		$authRuleres = $authRule->authRuleTree();
		$this->assign('authRuleres',$authRuleres);
		return view();
	}
	public function del(){
		$res = $this->_authgroup->destroy(input('id'));
		if($res){
			$this->success('删除用户组成功','index');
		}else{
			$this->error('删除用户组失败');
		}
	}
	public function edit(){
		if(request()->isPost()){
			$data = input('post.');
			if(!isset($data['status'])){
				$data['status']=0;
			}
			$save = $this->_authgroup->save($data,['id'=>input('id')]);
			if($save!==false){
				$this->success('用户组修改成功','index');
			}else{
				$this->error('用户组修改失败');
			}
		}
		$groups = $this->_authgroup->find(input('id'));
		$authRule = new \app\admin\model\AuthRule();
		$authRuleres = $authRule->authRuleTree();
		$this->assign([
			'authRuleres'=>$authRuleres,
			'groups'=>$groups,
		]);
		return view();
	}
}