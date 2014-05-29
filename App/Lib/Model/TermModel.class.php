<?php 

class TermModel extends Model{

	protected $_validate = array(
		// 进行字段的验证
		array('tname','require','学期名称不能为空!'),
		array('tname','','学期名出现重复，请重新输入!',0,'unique'),
		array('tstart','require','日期不能为空!'),
		array('tend','require','日期不能为空'),
		array('tstart','checkdate','截止日期必须晚于开始日期!',0,'callback'),

	);

	/**
	 * 判断时间的输入是否符合要求
	 * @return [type] [description]
	 */
	function checkdate(){
		$starttime = I('txtStart','','strtotime');
		$endtime = I('txtEnd','','strtotime');
		if($endtime < $starttime){
			return false;
		}else{
			return true;
		}
	}

}

 ?>