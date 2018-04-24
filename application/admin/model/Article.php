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
					$src ='http://127.0.0.1/bick/public' . DS . 'uploads'. DS .$info->getSaveName();
		           $article['pic'] = $src;
		        }else{
		            // 上传失败获取错误信息
		           $this->error('图片上传失败');
		        }
			}
		});
	}
}