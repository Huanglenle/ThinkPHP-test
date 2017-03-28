<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class UserController extends Controller {
    public function index(){
		echo "user user";
    }
	public function test($user,$pwd){
		echo 'user:'.$user.'<br/>pwd:'.$pwd;
	}
	public function model(){
		//创建Model基类，传递User表 think_user
		//$user = new Model('User');
		$user=M('User');
		//var_dump($user);
		var_dump($user->select());
	}
}