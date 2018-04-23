<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class Cate extends Base{
	public function index(){
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
		}
		$cateres = $this->_cate->catetree();
		$this->assign('cateres',$cateres);
		return view('add');
	}
}