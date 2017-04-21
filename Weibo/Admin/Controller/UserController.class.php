<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model\UserModel;
// use Think\Model;

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
		//var_dump($user->select());
		//$user = M();
		var_dump($user->query("select * from think_user where user='蜡笔小新'"));
		//var_dump($user->getDbfields());
	
	}
}