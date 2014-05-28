<?php
	class IndexAction extends CommonAction{
		/**
		 * 进入后台主界面
		 * @return [type] [description]
		 */
		public function index(){
            $this->display();
		}

		/**
		 * 欢迎界面
		 * @return [type] [description]
		 */
		public function welcome(){
			echo 'welcome';
		}

		/**
		 * 显示系统基本设置界面
		 * @return [type] [description]
		 */
		public function setting(){
			$this->display();
		}
		
	}
?>