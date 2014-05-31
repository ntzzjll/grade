<?php 

class StudentModel extends Model{

	protected $_validate = array(

		array('scode','','学生编号已经存在!',0,'unique'),

	);

}

 ?>