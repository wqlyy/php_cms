<?php
namespace app\admin\model;
use think\Model;
class AuthRule extends Model{
	public function authRuleTree(){
		$authRuleres = $this->order('sort desc')->select();
		return $this->sort($authRuleres);
	}
	public function sort($data,$pid=0){
		static $arr = array();
		foreach ($data as $k => $v) {
			if($v['pid']==$pid){
				$arr[] = $v;
				$this->sort($data,$v['id']);
			}
		}
		return $arr;
	}
	public function getchildrenid($authRuleId){
		$authRuleres = $this->select();
		return $this->_getchildrenid($authRuleres,$authRuleId);
	}
	public function _getchildrenid($authRuleres,$authRuleId){
		static $arr = array();
		foreach ($authRuleres as $k => $v) {
			if($v['pid'] == $authRuleId){
				$arr[] = $v['id'];
				$this->_getchildrenid($authRuleres,$v['id']);
			}
		}
		return $arr;
	}
}