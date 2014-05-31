<?php 

class StudentAction extends CommonAction{

	/**
	 * 显示学生列表
	 * @return [type] [description]
	 */
	public function index(){
		echo 'haha';
	}

	/**
	 * 显示学生添加窗口
	 */
	public function add(){
		$this->display();
	}

	public function checkLoadStudent(){
		$this->display();
	}

	/**
	 * 学生导入界面
	 * @return [type] [description]
	 */
	public function importStudent(){
		// $this->display();
		if(!$this->isPost()) halt('页面不存在!');

		if(!empty($_FILES)){
			import('ORG.Net.UploadFile');

			$config=array(
                'allowExts'=>array('xlsx','xls'),
                'savePath'=>'./Public/upload/',
                'saveRule'=>'time',
            );

            $upload = new UploadFile($config);
            if (!$upload->upload()) {
                $this->error($upload->getErrorMsg());
            } 
            else 
            {
                $info = $upload->getUploadFileInfo();
                
            }

            vendor("PHPExcel.PHPExcel");
            $file_name=$info[0]['savepath'].$info[0]['savename'];
            $objReader = PHPExcel_IOFactory::createReader('Excel5');
            $objPHPExcel = $objReader->load($file_name,$encode='utf-8');
            $sheet = $objPHPExcel->getSheet(0);
            $highestRow = $sheet->getHighestRow(); // 取得总行数
            $highestColumn = $sheet->getHighestColumn(); // 取得总列数

            // $count = 1;
            for($i=2;$i<=$highestRow;$i++)
            {   
            	// 读取EXCEL表中的数据至变量
               	$strcode= $objPHPExcel->getActiveSheet()->getCell("A".$i)->getValue();  
                $strrealname = $objPHPExcel->getActiveSheet()->getCell("B".$i)->getValue();
                $straccount = $objPHPExcel->getActiveSheet()->getCell("C".$i)->getValue();
                $strpassword = $objPHPExcel->getActiveSheet()->getCell("D".$i)->getValue();
                $strgender = $objPHPExcel->getActiveSheet()->getCell("E".$i)->getValue();
                $strphone = $objPHPExcel->getActiveSheet()->getCell("F".$i)->getValue();
                $strclass = $objPHPExcel->getActiveSheet()->getCell("G".$i)->getValue();               
                // 将数据转换成可以直接输入到数据库中的格式
                
                // 将记录插入至用户表中
                $data_user = array(
                	'uname' => $straccount,
                	'upassword' => md5('strpassword'),
                	'utype' => 2
                );

                $user = D('User');

                if(!$user->create($data_user)){
                	$this->error($user->getError());
                }
                else
                {
                	if(!$uid = $user->data($data_user)->add()){
                		$this->error($user->getError());
                	}
                	else
                	{
                		$data_student = array(
		                	'scode' => $strcode,
		                	'srealname' => $strrealname,
		                	'sgender' => $strgender,
		                	'sphone' => $strphone,
		                	'classid' => $this->getClassidByCode($strclass),
		                	'uid' => $uid
                		);

                		$student = D('Student');

                		if(!$student->create($data_student)){
                			$this->error($student->getError());
                		}else{
                			if(!$student->data($data_student)->add()){
                				$this->error($student->getError());
                			}
                		}
                	}
                // $count++;
                }
            }             
            // $this->student = $data;
            $this->success('学生导入成功!');
		}
		else
		{
				$this->error("请选择上传的文件");
		}
	}

	/**
	 * 根据班级编号获取班级ID
	 * @param  [type] $code [班级编号]
	 * @return [type]       [description]
	 */
	public function getClassidByCode($code){
		if($code){
			$class = M('class');
			$rs = $class->where(array('ccode' => $code))->find();
			return $rs['cid'];
		}
	}


}

 ?>