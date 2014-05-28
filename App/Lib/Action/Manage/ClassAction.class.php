<?php
	class ClassAction extends CommonAction{
		/**
		 * 显示班级列表页
		 * @return [type] [description]
		 */
		public function index(){
			$class = D('ClassView')->order('ccode')->select();
			if($class){
				$this->class = $class;
				$this->display();
			}
		}

		/**
		 * 显示班级添加页面
		 */
		public function add(){
			// 获取部门列表
			$department = M('department')->order('dorder')->select();
			$this->department = $department;

			$this->display();
		}

		/**
		 * 添加班级动作
		 * @return [type] [description]
		 */
		public function doAddClass(){
			if(!$this->isPost()) halt('页面不存在!');
			// 获取用户输入内容
			$departmentid = I('selDepartment');
			$classcode = I('txtClassCode');
			$classname = I('txtClassName');
			$mastername = I('txtMasterName');
			$masterphone = I('txtMasterPhone');

			$data = array(
				'ccode' => $classcode,
				'cname' => $classname,
				'cmaster' => $mastername,
				'cmasterphone' => $masterphone,
				'departmentid' => $departmentid
			);

			$class = D('Class');

			if($class->create($data)){
				if($class->data($data)->add()){
					$this->success('班级记录添加成功!',U('index'));
				}else{
					$this->error('班级记录添加失败');
				}
			}else{
				$this->error($class->getError());
			}
		}

		public function doDel(){
			if(!$this->isGet()) halt('页面不存在!');

			$cid = I('cid');
			if($cid){
				if(M('class')->where(array('cid'=>$cid))->delete()){
					$this->success('班级删除成功!',U('index'));
				}else{
					$this->error('班级删除失败!',U('index'));
				}
			}	    		
    	}
	}
?>