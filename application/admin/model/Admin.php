<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model {
	public function addadmin($data){
		if(empty($data) || !is_array($data)){
			return false;
		}
		if($this->save($data)){
			return true;
		}else{
			return false;
		}
	}
}
