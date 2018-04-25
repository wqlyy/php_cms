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
			$validate = \think\Loader::validate('Conf');
			if(!$validate->check($data)){
				$this->error($validate->getError());
			}
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
			$validate = \think\Loader::validate('Conf');
			if(!$validate->scene('edit')->check($data)){
				$this->error($validate->getError());
			}
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
	public function conf(){
		if(request()->isPost()){
			$data = input('post.');
			$_confarr=db('conf')->field('enname')->select();
			$confarr=array();
			$_fromarr=array();
			$checkboxarr=array();
			foreach ($_confarr as $k => $v) {
				$confarr[]=$v['enname'];
			}
			foreach ($data as $k => $v) {
				$_fromarr[]=$k;
			}
			foreach ($confarr as $k => $v) {
				if(!in_array($v,$_fromarr)){
					$checkboxarr[]=$v;
				}
			}
			if($checkboxarr){
                foreach ($checkboxarr as $k => $v) {
                   $this->_conf->where('enname',$v)->update(['value'=>'']);
                }
            }
			if($data){
				foreach ($data as $k => $v) {
					$this->_conf->where('enname',$k)->update(['value'=>trim($v)]);
				}
				$this->success('修改配置成功');
			}
			
			return;
		}
		$confres = $this->_conf->order('sort desc')->select();
		if($confres){
			$this->assign('confres',$confres);
		}else{
			$this->error('暂无配置');
		}
		return view();
	}
}