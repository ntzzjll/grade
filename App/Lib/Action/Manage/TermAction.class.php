<?php 

class TermAction extends CommonAction{
	/**
	 * 显示学期列表
	 * @return [type] [description]
	 */
	public function index(){
		$term = M('term')->order('tstart')->select();
		if($term){
			$this->term = $term;
		}
		$this->display();
	}

	/**
	 * 添加学期记录
	 */
	public function add(){
		$this->display();
	}

	public function doAddTerm(){
		if(!$this->isPost()) halt('页面不存在!');

		$termname = I('txtTermName');
		$starttime = I('txtStart','','strtotime');
		$endtime = I('txtEnd','','strtotime');

		$data = array(
			'tname' => $termname,
			'tstart' => $starttime,
			'tend' => $endtime
		);

		$term = D('Term');

		if(!$term->create($data)){
			$this->error($term->getError());
		}else{
			if($term->data($data)->add()){
				$this->success('学期添加成功','index');
			}else{
				$this->error('学期添加失败');
			}
		}


	}

}

 ?>