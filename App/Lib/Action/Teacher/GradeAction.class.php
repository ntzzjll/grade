<?php 

class GradeAction extends CommonAction{

	public function index(){

	}

	/**
	 * 显示添加成绩页面
	 */
	public function add(){
		// 获取学期列表
		$term = M('term')->order('tstart desc')->select();
		$this->term = $term;

		// 获取教师所上的班级列表
		$teacherid = session('uid');
		$class = D('CourseView')->where(array('teacherid'=>$teacherid))->select();
		$this->class = $class;
		$this->display();
	}

	/**
	 * 异步获取教师在某一个学期所上的班级列表
	 * @return [type] [description]
	 */
	public function getClassList(){
		if(!$this->isAjax()) halt('页面不存在!');

		$teacherid = session('uid');
		$termid = I('termid') ;

		$class = D('CourseView')->where(array('teacherid'=>$teacherid,'termid'=>$termid))->field('clsid,ccode')->select();

		echo json_encode($class);
	}

	/**
	 * 异步获取教师在某班级上课的课程列表
	 * @return [type] [description]
	 */
	public function getCourseList(){
		if(!$this->isAjax()) halt('页面不存在!');

		$teacherid = session('uid');
		$termid = I('termid');
		$classid = I('classid');

		$where = array(
			'teacherid'=>$teacherid,
			'termid' => $termid,
			'clsid' => $classid
		);

		$course = D('CourseView')->where($where)->field('courseid,cname')->select();

		echo json_encode($course);

	}

}

 ?>