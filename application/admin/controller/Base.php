<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\Admin as AdminModel;
use app\admin\model\Cate as CateModel;
use app\admin\model\Article as ArticleModel;
use app\admin\model\Link as LinkModel;
use app\admin\model\Conf as ConfModel;
/**
* 
*/
class Base extends Controller
{
	public function _initialize(){
		$this->checklogin();
        $this->initModel();
	}
	public function checklogin(){
		if(!session('user') || !session('id')){
            $this->error('请登录','login/index');
        }
	}
	public function initModel(){
		$this->_admin = new AdminModel();
        $this->_cate = new CateModel();
        $this->_article = new ArticleModel();
        $this->_link = new LinkModel();
        $this->_conf = new ConfModel();
	}
	
}