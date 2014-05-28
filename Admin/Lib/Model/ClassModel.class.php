<?php 
	/**
	 * 班级模型类
	 */
	class ClassModel extends Model{
		/**
		 * [$_validate 字段验证]
		 * @var array
		 */
		protected $_validate = array(
			array('ccode','require','班级编号不能为空'),
			array('ccode','','班级已经存在，请重新输入!',0,'unique'),
			array('ccode','/^\d{4}$/i','班级编号的格式不正确'),
			array('cname','require','班级名称不能为空'),
			array('cmasterphone','/^\d{11}$/i','手机号码格式不正确')
		);
	}
 ?>