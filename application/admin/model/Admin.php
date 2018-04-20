<?php
namespace app\admin\model;
use think\Model;
class Admin extends Model {
	public function add_admin($data){
		if(empty($data) || !is_array($data)){
			return false;
		}
		if($data['password']){
			$data['password'] = md5('salt_'.md5($data['password']));
		}
		if($this->save($data)){
			return true;
		}else{
			return false;
		}
	}
	public function get_list(){
		return $this->paginate(5);
	}
	public function getAdminById($id){
		return $this->getById($id);
	}
	public function updateAdmin($data){
		return $this->save([
		    'username'  => $data['username'],
		    'password' => $data['password'],
		],['id' => $data['id']]);
	}
}
