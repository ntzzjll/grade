<?php
	class CommonAction extends Action{
		public function _initialize(){
			if (!isset($_SESSION['uid']) || !isset($_SESSION['uname'])) {
				$this->redirect('Login/index');
			}
		}
	}
?>