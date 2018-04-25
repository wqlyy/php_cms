<?php
namespace app\index\controller;
use think\Controller;
/**
* 
*/
class Base extends Controller{
	
	public function _initialize(){
		$conf = new \app\index\model\Conf();
		$_confres = $conf->getAllConf();
		$confAll = array();
		foreach ($_confres as $k => $v) {
			$confAll[$v['enname']]=$v['cnname'];
		}
		
		$this->assign('confAll',$confAll);
	}
}