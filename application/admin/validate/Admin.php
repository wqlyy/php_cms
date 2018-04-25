<?php
namespace app\admin\validate;
use think\Validate;

class Admin extends Validate{
	protected $rule=[
		'username'=>'require|unique:admin|max:25',
		'password'=>'require|min:6',
	];
	protected $message=[
		'username.require'=>'用户名不能为空',
		'username.unique'=>'用户名已经存在',
		'username.max'=>'用户不能超过25个字符',
		'password.require'=>'用户密码不能为空',
		'password.min'=>'密码不能少于6位',
	];
	protected $scene=[
		'add'=>['password','username'],
		'edit'=>['username']
	];
}