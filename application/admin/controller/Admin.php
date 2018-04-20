<?php
namespace app\admin\controller;
use think\Controller;
class Admin extends Controller
{
    public function index(){
        return view('list');
    }
    public function add(){
    	return view('add');
    }
    public function edit(){
    	return view('edit');
    }
}
