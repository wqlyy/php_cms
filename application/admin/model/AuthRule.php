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
				$v['dataid'] = $this->getparentid($v['id']);
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
	public function getparentid($authRuleId){
		$authRuleres = $this->select();
		return $this->_getparentid($authRuleres,$authRuleId,true);
	}
	public function _getparentid($authRuleres,$authRuleId,$clear=false){
		static $arr = array();
		if($clear){
			$arr = array();
		}
		
		foreach ($authRuleres as $k => $v) {
			if($v['id'] == $authRuleId){
				$arr[] = $v['id'];
				$this->_getparentid($authRuleres,$v['pid'],false);
			}
		}
		asort($arr);
		$arrStr=implode('-',$arr);
		return $arrStr;
	}

}