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
			$add=$this->_link->save(input('post.'));
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
			$res = $this->_link->save(input('post.'),['id'=>input('id')]);
			if(!$res){
				$this->error('修改失败');
			}else{
				$this->success('修改成功','index');
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