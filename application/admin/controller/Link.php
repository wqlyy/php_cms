<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class Link extends Base{
	public function index(){
		if(request()->isPost()){
			$sorts = input('post.');
			foreach ($sorts as $k => $v) {
				$this->_link->update(['id'=>$k,'sort'=>$v]);
			}
			$this->success('更新排序成功','index');
			return;
		}
		$links = $this->_link->order('sort desc')->paginate(5);
		$this->assign('links',$links);
		return view('list');
	}
	public function add(){
		if(request()->isPost()){
			$data = input('post.');
			$validate = \think\Loader::validate('Link');
			if(!$validate->scene('add')->check($data)){
				$this->error($validate->getError());
			}
			$add=$this->_link->save($data);
			if($add){
				$this->success('添加链接成功','index');
			}else{
				$this->error('添加链接失败');
			}
			return;
		}
		return view('add');
	}
	public function edit(){
		if(request()->isPost()){
			$data=input('post.');
			$validate = \think\Loader::validate('Link');
			if(!$validate->scene('edit')->check($data)){
				$this->error($validate->getError());
			}
			$res = $this->_link->save($data,['id'=>input('id')]);
			if($res !== false){
				$this->success('修改成功','index');
			}else{
				$this->error('修改失败');
			}
			return;
		}
		$link = $this->_link->find(input('id'));
		$this->assign('link',$link);
		return view();
	}
	public function del(){
		$del = db('link')->delete(input('id'));
		if($del){
			$this->success('删除成功','index');
		}else{
			$this->error('删除失败');
		}
	}
}