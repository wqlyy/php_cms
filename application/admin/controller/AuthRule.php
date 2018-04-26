<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class AuthRule extends Base{
	public function index(){
		if(request()->isPost()){
			$sorts = input('post.');
			foreach ($sorts as $k => $v) {
				$this->_authRule->update(['id'=>$k,'sort'=>$v]);
			}
			$this->success('更新排序成功','index');
			return;
		}
		$_authRule = $this->_authRule->authRuleTree();
		$this->assign('authRules',$_authRule);
		return view('list');
	}
	public function add(){
		if(request()->isPost()){
			$data = input('post.');
			$plevel = $this->_authRule->field('level')->where('id',$data['pid'])->find();
			if($plevel){
				$data['level'] = $plevel['level'] + 1;
			}else{
				$data['level'] = 0;
			}
			$add=$this->_authRule->save($data);
			if($add){
				$this->success('添加权限成功','index');
			}else{
				$this->error('添加权限失败');
			}
			return;
		}
		$rules = $this->_authRule->authRuleTree();
		$this->assign('rules',$rules);
		return view('add');
	}
	public function edit(){
		if(request()->isPost()){
			$data = input('post.');
			$res = $this->_authRule->save($data,['id'=>input('id')]);
			if($res !== false ){
				$this->success('权限修改成功','index');
			}else{
				$this->error('权限修改失败');
			}
			return;
		}
		$rules = $this->_authRule->authRuleTree();
		$authRuleres = $this->_authRule->find(input('id'));
		$this->assign(array(
			'rules'=>$rules,
			'authRuleres' => $authRuleres,
		));
		return view();
	}
	public function del(){
		$del = $this->_authRule->destroy(input('id'));
		if($del){
			$this->success('删除成功','index');
		}else{
			$this->error('删除失败');
		}
	}
}