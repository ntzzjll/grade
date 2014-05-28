<?php
	/**
	 * 部门模型类
	 */
	class DepartmentModel extends Model{
		/**
		 * [$_validate 字段验证]
		 * @var array
		 */
		protected $_validate = array(
			// 验证部门的输入是否有效
			array('dname','require','部门名称不能为空!'),
			array('dname','','部门已经存在，请不要重复添加!',0,'unique',1)
		);
	}
?>