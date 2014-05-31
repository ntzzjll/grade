<?php 

class UserModel extends Model{

	protected $_validate = array(

		array('uname','','用户名重复，请调整后再插入',0,'unique'),

	);

 }

 ?>
