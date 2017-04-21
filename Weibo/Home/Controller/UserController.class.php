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
		//$user=M('User');
		//var_dump($user);
		//var_dump($user->select());
		//$user = M();
		//var_dump($user->query("select * from think_user where user='蜡笔小新'"));
		//数据表结构
		//var_dump($user->getDbfields());
		
		//sql查询
		//$user = M('user');
		//var_dump($user->where('id =1')->select());
		
		//数组模式查询
		//$condition['id']=1;
		//$condition['user']='娜美';
		//$condition['_logic']='OR';
		//var_dump($user->where($condition)->select());
		
		//\stdClass 将目录设置为根目录，stdClass是PHP内置的空类
		//\stdClass 将目录设置为根目录，stdClass是PHP内置的空类
		//$condition = new \stdClass();
		//$condition->id=1;
		//$condition->user = '娜美';
		//$condition->_logic = 'OR';
		//var_dump($user->where($condition)->select());
		
		//表达式
		$user = M('User');
		//$map['id']= array('eq',2);
		//$map['id']= array('neq',2);
		//$map['id']= array('gt',2);
		//$map['id']= array('egt',2);
		//$map['id']= array('lt',2);
		//$map['id']= array('elt',2);
		//$map['user']= array('like','%小%');
		//$map['user']= array('like',array('%小%','%美%') );
		//$map['user']= array('like',array('%小%','%子%'),'AND');
		//$map['id']= array('between','1,3');
		//$map['id']= array('between',array('1','3'));
		//$map['id']= array('not between',array('1','3'));
		//$map['id']= array('in','1,2,5');
		//$map['id']= array('in',array('1','2','4'));
		//$map['id']= array('not in',array('1','2','4'));
		
		//$map['id']= array('exp','>1');
		//$map['user']= array('exp',' like "%美"');
		//$map['_logic']= 'AND';
		
		//$map['id']= array('exp','<2');
		//var_dump($user->where($map)->select());
		
		
		$user = M('User');
		//$map['user|email']='蜡笔小新';
		//$map['user&email']='蜡笔小新';
		//$map['id&user']=array(1,'蜡笔小新','_multi'=>true);
		$map['id&user']=array(1,'蜡笔小新','_multi'=>true);
		var_dump($user->where($map)->select());
		
	}
}