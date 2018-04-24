<?php 
namespace app\admin\validate;
use think\Validate;
/**
* 
*/
class Cate extends Validate{
	
	protected $rule=[
		'catename'=>'require|max:25|unique:cate'
	];
	protected $message=[
		'catename.require'=>'栏目标题不能为空',
		'catename.max'=>'栏目标题不能大于25个字符',
		'catename.unique'=>'栏目已经存在'
	];
	protected $scene=[
		'edit'=>['catename']
	];
}