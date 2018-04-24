<?php 
namespace app\admin\validate;
use think\Validate;

class Article extends Validate{
	protected $rule=[
		'title'=>'require|max:25|unique:article',
		'cateid'=>'require',
		'content'=>'require'
	];
	protected $message=[
		'title.require'=>'文章标题不能为空',
		'title.max'=>'文章标题不能大于25个字符',
		'title.unique'=>'文章标题已经存在',
		'cateid.require'=>'文章栏目不能为空',
		'content.require'=>'文章内容必填'
	];

	protected $scene=[ 
		'add'=>['title','cateid','content'],
		'edit'=>['title','cateid']
	];

}