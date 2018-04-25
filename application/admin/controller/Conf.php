<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class Conf extends Base{
	public function index(){
		if(request()->isPost()){
			$sorts = input('post.');
			foreach ($sorts as $k => $v) {
				$this->_conf->update(['id'=>$k,'sort'=>$v]);
			}
			$this->success('更新排序成功','index');
			return;
		}
		$confres = $this->_conf->order('sort desc')->paginate(4);
		$this->assign('confres',$confres);
		return view('list');
	}
	public function add(){
		if(request()->isPost()){
			$data=input('post.');
			if($data['values']){
				$data['values'] = str_replace('，',',',$data['values']);
			}
			$res = $this->_conf->save($data);
			if($res){
				$this->success('添加配置成功','index');
			}else{
				$this->error('添加配置失败');
			}
			return;
		}
		return view();
	}
	public function edit(){
		if(request()->isPost()){
			$data = input('post.');
			if($data['values']){
				$data['values'] = str_replace('，',',',$data['values']);
			}
			$res = $this->_conf->save($data,input('id'));
			if($res !== false){
				$this->success('修改成功','index');
			}else{
				$this->error('修改失败');
			}
			return;
		}
		$confs = $this->_conf->find(input('id'));
		$this->assign('confs',$confs);
		return view();
	}
	public function del(){
		$del = db('conf')->delete(input('id'));
		if($del){
			$this->success('删除成功','index');
		}else{
			$this->error('删除失败');
		}
	}
}