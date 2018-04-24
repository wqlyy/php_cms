<?php
namespace app\admin\controller;
use app\admin\controller\Base;

class Article extends Base{
	public function index(){
		$articleList = db('article')
		->field('a.*,b.catename')
		->alias('a')
		->join('bk_cate b','a.cateid=b.id')
		->paginate(3);
		$this->assign('articleList',$articleList);
		return view('list');
	}
	public function add(){
		if(request()->isPost()){
			$data = input('post.');
			
			
			$res = $this->_article->save($data);
			if($res){
				$this->success('添加文章成功','index');
			}else{
				$this->error('添加文章失败');
			}
			return;
		}
		$cateres = $this->_cate->catetree();
		$this->assign('cateres',$cateres);
		return view();
	}
	public function edit(){
		if(request()->isPost()){
			$res = $this->_article->save(input('post.'),['id'=>input('id')]);
			if(!$res){
				$this->error('修改失败');
			}else{
				$this->success('修改成功','index');
			}
			return;
		}
		$cateres = $this->_cate->catetree();
		$articles = $this->_article->find(input('id'));
		$this->assign(array(
			'cateres'=>$cateres,
			'articles' => $articles,
		));
		return view();
	}
}