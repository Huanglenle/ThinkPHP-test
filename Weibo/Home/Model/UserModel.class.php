<?php
namespace Home\Model;
use Think\Model;

class UserModel extends Model{
	//手动定义数据表字段，_pk表示主键
	protected $fields = array('id','user','_pk'=>id);
	public function __construct(){
		parent::__construct();
		echo '\Home';
	}
}
?>


