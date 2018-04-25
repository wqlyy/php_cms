<?php 
namespace app\admin\validate;
use think\Validate;

class Conf extends Validate{
	protected $rule=[
		'cnname'=>'require|unique:conf',
		'enname'=>'require|unique:conf',
		'type'=>'require'
	];
	protected $message=[
		'cnname.require'=>'中文名不能为空',
		'cnname.unique'=>'中文名已经存在',
		'enname.unique'=>'英文名已经存在',
		'enname.require'=>'英文名不能为空',
		'type.require'=>'类型不能为空',
	];

	protected $scene=[ 
		'edit'=>['cnname','enname'],
	];

}