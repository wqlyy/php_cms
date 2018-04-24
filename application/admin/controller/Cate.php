<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class Cate extends Base{
	protected $beforeActionList = [
		'delsoncate' => ['only'=>'del'],
	]; 
	public function index(){
		if(request()->isPost()){
			$sorts = input('post.');
			foreach ($sorts as $k => $v) {
				$this->_cate->update(['id'=>$k,'sort'=>$v]);
			}
			$this->success('更新排序成功','index');
			return;
		}
		$catelist = $this->_cate->catetree();
		$this->assign('catelist',$catelist);
		return view('list');
	}
	public function add(){
		if(request()->isPost()){
			$add=$this->_cate->save(input('post.'));
			if($add){
				$this->success('添加栏目成功','index');
			}else{
				$this->error('添加栏目失败');
			}
			return;
		}
		$cateres = $this->_cate->catetree();
		$this->assign('cateres',$cateres);
		return view('add');
	}
	public function del(){
		$del = db('cate')->delete(input('id'));
		if($del){
			$this->success('删除成功','index');
		}else{
			$this->error('删除失败');
		}
	}
	public function delsoncate(){
		$cateid = input('id');
		$sondids = $this->_cate->getchildrenid($cateid);
		$allcateid = $sondids;
		$allcateid[] = $cateid;
		foreach ($allcateid as $k => $v) {
			$this->_article->where(array('cateid'=>$v))->delete();
		}
		if($sondids){
			$this->_cate->destroy($sondids);
		}
	}
	public function edit(){
		if(request()->isPost()){
			$res = $this->_cate->save(input('post.'),['id'=>input('id')]);
			if(!$res){
				$this->error('修改失败');
			}else{
				$this->success('修改成功','index');
			}
			return;
		}
		$cateres = $this->_cate->catetree();
		$cates = $this->_cate->find(input('id'));
		$this->assign(array(
			'cateres'=>$cateres,
			'cates' => $cates,
		));
		return view();
	}
}