<?php
class LoginAction extends Action{
	/**
	 * 登录界面
	 * @return [type] [description]
	 */
	public function index(){
		$this->display();
	}

	/**
	 * 登录操作
	 * @return [type] [description]
	 */
	public function dologin(){
		if(!$this->isPost()) halt('页面不存在!');
		$verifycode = $this->_post('verifycode','md5');
		// 检查验证码是否正确
		if($verifycode <> $_SESSION['verify']){
			$this->error('验证码不匹配!');
		}		
		// 检查用户名和密码是否正确
		$username = $this->_post('account');
		$password = $this->_post('password','md5');

		if(!$username || !$password) $this->error('请输入完整信息!');

		$data = array('uname' => $username,'upassword' => $password);

		if(!($user = M('User')->where($data)->find())){
			$this->error('用户名或密码输入错误!');
		}else{
			// 登录成功
			session('uid',$user['uid']);
			session('uname',$user['uname']);
			session('realname',$this->getRealName($user['uid']));
			$this->writeToLogin();
			header('Content-Type:text/html;charset=UTF-8');
			redirect(U('/Index'),3,'用户登录成功，马上进行后台界面...');
		}
	}

	/**
	 * 异步检查用户输入
	 * @return [type] [description]
	 */
	public function checklogin(){
		if(!$this->isAjax()) halt('页面不存在!');
		$verifycode = $this->_post('verifycode','md5');
		// 检查验证码是否输入正确
		if($verifycode<>$_SESSION['verify']){
			echo 'errorverify';//errorverify-表示验证码错误
			return false;
		}else{
			// 检查用户名和密码是否输入正确
			$username = $this->_post('account');
			$password = md5($this->_post('password'));

			$data = array('uname'=>$username,'upassword'=>$password);
			if(!($user = M('User')->where($data)->find())){
				$msg = "外界用户试图使用".$username."+".$this->_post('password')."组合方式登录系统，由于输入错误，特此警告!";
				Log::write($msg);
				echo 'erroraccount';//erroraccount-表示用户名或用户密码错误
				return false;
			}else{
				echo 'loginok';//'ok'-表示用户输入正确
				return false;
			}
		}
	}
	/**
	 * 验证码图片
	 * @return [type] [description]
	 */
	public function verify () {
		import('ORG.Util.Image');
		Image::buildImageVerify();
	}

	/**
	 * 写入登录记录
	 * @return [type] [description]
	 */
	private function writeToLogin(){
		//获取三个变量
		$userid = $_SESSION['uid'];
		$time = time();
		$ip = get_client_ip($type);

		$data = array(
			'logintime' => $time,
			'loginip' => $ip,
			'userid' => $userid
		);

		$login = M('login');
		if(!$login->data($data)->add()){
			$this->error('日志写入错误!');
		}

	}
	/**
	 * 取得真实姓名
	 * @param  [type]  $uid  [用户登录ID]
	 * @param  integer $type [用户类型]
	 * @return [type]        [description]
	 */
	private function getRealName($uid,$type=0){
		switch($type){
			case 0:
				$realname = '管理员';
				return $realname;
			case 1:
				$user = M('teacher');
				$fieldname = 'trealname';
				break;
			case 2:
				$user = M('student');
				$fieldname = 'srealname';
		}

		$where = array('uid' => $uid);
		$rs = $user->where($where)->field($fieldname)->select();
		return $rs[$fieldname];
	}
}
?>