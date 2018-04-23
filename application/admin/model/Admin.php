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
		$res = $this->save([
		    'username'  => $data['username'],
		    'password' => $data['password'],
		],['id' => $data['id']]);
		if($res==0 || $res){
			return true;
		}else{
			return false;
		}
	}
	public function delAdmin($id){
		return $this->destroy(['id' => $id]);
	}
	public function login($data){
		$admin = $this->getByUsername($data['username']);
		if(!$admin){
			return 1;//用户不存在
		}else{
			if($admin['password'] == md5('salt_'.md5($data['password']))){
				session('id',$admin['id']);
				session('user',$admin['username']);
				return 2;//登录成功
			}else{
				return 3;//登录失败
			}
		}
	}
}
