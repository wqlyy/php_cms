<?php 
namespace app\admin\validate;
use think\Validate;

class Link extends Validate{
	protected $rule=[
		'title'=>'require|max:25|unique:link',
		'desc'=>'require',
		'url'=>'require|unique:link'
	];
	protected $message=[
		'title.require'=>'链接标题不能为空',
		'title.max'=>'链接标题不能大于25个字符',
		'title.unique'=>'链接标题已经存在',
		'desc.require'=>'链接描述不能为空',
		'url.require'=>'链接地址不能为空',
		'url.unique'=>'链接地址已经存在'
	];

	protected $scene=[ 
		'add'=>['title','desc','url'],
		'edit'=>['title','desc','url']
	];

}