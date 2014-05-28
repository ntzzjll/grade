<?php
	class DepartmentAction extends CommonAction{
		/**
		 * 显示部门列表
		 * @return [type] [description]
		 */
		public function index(){
			$department = M('department')->order('dorder')->select();
			if($department){
				$this->department = $department;
				$this->display();	
			}
		}
		/**
		 * 添加部门动作
		 * @return [type] [description]
		 */
		public function doAddDepartment(){
			if(!$this->isPost()) halt('页面不存在!');
			//获取用户输入内容
			$departmentname = I('txtDepartmentName');
			$departmentphone = I('txtDepartmentPhone');

			$data = array('dname'=>$departmentname,'dphone'=>$departmentphone);
			// 实例化模型，验证后进行数据插入			
			$department = D('Department');

			if(!$department->create($data)){
				$this->error($department->getError());
			}else{
				if($department->data($data)->add()){
					$this->success('部门记录添加成功!','index');
				}else{
					$this->error('部门记录添加失败!');
				}
			}
		}

		/**
		 * 实现更新部门信息操作
		 * @return [type] [description]
		 */
		public function doUpdateDepartment(){
			if(!$this->isPost()) halt('页面不存在!');
			//获取用户输入内容
			$departmentname = I('txtDepartmentName');
			$departmentphone = I('txtDepartmentPhone');

			$data = array('dname'=>$departmentname,'dphone'=>$departmentphone);
			// 实例化模型，验证后进行数据插入			
			$department = D('Department');

			if(!$department->create($data,2)){
				$this->error($department->getError());
			}else{
				$did = I('hddid');
				$where = array('did' => $did);
				if($department->where($where)->save($data)){
					$this->success('部门信息更新成功!',U('index'));
				}else{
					$this->error('部门信息更新失败!');
				}
			}
		}

		/**
		 * 显示编辑页面
		 * @return [type] [description]
		 */
		public function edit(){
			if(!$this->isGet()) halt('页面不存在!');

			$did = I('did');

			if($did){
				$department = M('department')->where(array('did'=>$did))->find();
				if($department){
					$this->department = $department;
					$this->display();
				}
			}
		}

		/**
		 * 更新部门列表顺序
		 * @return [type] [description]
		 */
		public function changeOrder(){
	        if(!$this->isPost()) halt('页面不存在');
	        $arr = array();
	        $arr = $_POST;
	        $data=array();
	        $db = M('department');
	        if($arr && $arr != null){
	            foreach($arr as $key=>$v){
	                $id = substr($key, 6);
	                $data = array(
	                    "did" => $id,
	                    "dorder"=>$v                
	                );   
	                if($db->where(array('did'=>$data['did']))->getField('dorder') != $data['dorder']){
	                    if(!$db->data($data)->save()){
	                        $this->error('顺序更新失败');
	                    }
	                }
	            }
	            $this->success('顺序更新成功',U('index'));
	        }
    	}

    	public function doDel(){
			if(!$this->isGet()) halt('页面不存在!');

			$did = I('did');
			if($did){
				if(M('department')->where(array('did'=>$did))->delete()){
					$this->success('部门删除成功!',U('index'));
				}else{
					$this->error('部门删除失败!',U('index'));
				}
			}	    		
    	}
	}
?>