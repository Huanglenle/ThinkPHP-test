<?php
namespace Common\Model;
use Think\Model;

class UserModel extends Model{
	protected $fields = array('id','user','_pk'=>id);
	public function __construct(){
		parent::__construct();
		echo '\Common';
	}
}
?>


