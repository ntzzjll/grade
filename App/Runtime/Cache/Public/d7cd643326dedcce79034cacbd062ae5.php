<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title><?php echo C('WEB_TITLE');?></title>
    <!--导入样式表文件-->
    <link href="__PUBLIC__/Css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="__PUBLIC__/Css/common.css" type="text/css" rel="stylesheet" />
    <link href="__PUBLIC__/Css/Admin/admin.css" type="text/css" rel="stylesheet" />
    <!--导入脚本文件-->
    <script language="javascript" src="__PUBLIC__/Js/jquery.js"></script>
    <script language="javascript" src="__PUBLIC__/Js/login.js"></script>
    <script language="javascript">
    var CONTROL = '__URL__';
    </script>
    <style type="text/css">
        body{
            background:url(__PUBLIC__/Images/admin_login_bg.png) repeat-x;
            background-color:#032454;
        }
    </style>
</head>
<body>
    <div id="login-part">
        <div id="login-form">
            <form action="<?php echo U('dologin');?>" name="frmlogin" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                    <label for="account" class="col-sm-2 control-label">帐&nbsp;&nbsp;&nbsp;&nbsp;号</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control input-sm" id="account" name="account" placeholder="输入帐号" />    
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                    <div class="col-sm-7">
                        <input type="password" class="form-control input-sm" id="password" name="password" placeholder="输入密码" />    
                    </div>                    
                </div>
                <div class="form-group">
                    <label for="verifycode" class="col-sm-2 control-label">验证码</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control input-sm" id="verifycode" name="verifycode" placeholder="输入验证码" />    
                    </div>  
                    <div class="col-sm-4">
                        <img src="<?php echo U('verify');?>" id="code" height="23" width="51" />
                        <a href="javascript:void(changecode(this));">换一个</a>
                    </div>                  
                </div>
                <a href="#" id="btnlogin"><!-- 登录 --></a>
                <span name="reg" id="reg"><a href="#">我要注册</a></span>
            </form>
        </div>
    </div>
</body>
</html>