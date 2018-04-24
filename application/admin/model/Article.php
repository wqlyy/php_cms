<?php
namespace app\admin\model;
use think\Model;
class Article extends Model{
	protected static function init(){
		Article::event('before_insert',function($article){
			if($_FILES['pic']['tmp_name']){
				$file = request()->file('pic');
				$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
				if($info){
					$src =DS.'bick'.DS.'public' . DS . 'uploads'. DS .$info->getSaveName();
		           $article['pic'] = $src;
		        }else{
		            // 上传失败获取错误信息
		           $this->error('图片上传失败');
		        }
			}
		});
		Article::event('before_update',function($article){
			if($_FILES['pic']['tmp_name']){
				$arts =Article::find($article->id);
				$thumb=$_SERVER['DOCUMENT_ROOT'].$arts['pic'];
		        if(file_exists($thumb)){
		        	@unlink($thumb);
		        }
				$file = request()->file('pic');
				$info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
				if($info){
					$src =DS.'bick'.DS.'public' . DS . 'uploads'. DS .$info->getSaveName();
		           $article['pic'] = $src;
		        }else{
		            // 上传失败获取错误信息
		           $this->error('图片上传失败');
		        }
		        
			}
		});
		Article::event('before_delete',function($article){
			$arts =Article::find($article->id);
			$thumb=$_SERVER['DOCUMENT_ROOT'].$arts['pic'];
	        if(file_exists($thumb)){
	        	@unlink($thumb);
	        }		        
		});
	}
}