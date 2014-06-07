<?php 

class CourseViewModel extends ViewModel{

	public $viewFields = array(

		'Course' => array('cid'=>'courseid','cname','termid','ccredit','teacherid','_type'=>'LEFT'),
		'Class' => array('cid'=>'clsid','ccode','_on'=>'Class.cid = Course.classid' )

	);

}

 ?>