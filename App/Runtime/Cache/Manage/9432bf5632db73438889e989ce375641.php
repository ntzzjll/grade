<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="__PUBLIC__/Css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="__PUBLIC__/Css/Admin/admin.css" type="text/css" rel="stylesheet" />
    <link href="__PUBLIC__/Css/common.css" type="text/css" rel="stylesheet" />
    <script src="__PUBLIC__/Js/jquery.js" type="text/javascript" language="javascript"></script>
    <script src="__PUBLIC__/Js/admin.js" type="text/javascript" language="javascript"></script>
    <title><?php echo C('WEB_TITLE');?>-后台管理</title>
    <script language="javascript">
    var CONTROL = '__APP__';
    var GROUPNAME = 'Manage';
    </script>
</head>
<body>
    <div class="main-content">
        <div id="header-part">
            <div id="logo"><span>成绩管理系统</span></div>
            <div id="header">                
                <div class="navigation">
                    <ul>
                        <li class="navigationtop" need="default"><a href="#"><span>控制面板</span></a></li>
                        <li need="Setting"><a href="#"><span>系统设置</span></a></li>
                        <li need="Department"><a href="#"><span>部门管理</span></a></li>
                        <li need="Class"><a href="#"><span>班级管理</span></a></li>
                        <li need="Term"><a href="#"><span>学期管理</span></a></li>
                        <li need="score"><a href="#"><span>课程管理</span></a></li>
                        <li need="score"><a href="#"><span>教师管理</span></a></li>
                        <li need="Student"><a href="#"><span>学生管理</span></a></li>
                    </ul>
                </div> 
            </div>
            <div class="topcontent">
                <div class="topcontents">
                    <span class="current">您的位置:</span>
                    <span class="location" name="location">管理员>后台首页</span>
                </div>
                <span class="adminright">
                    当前登录者:<span class="adminrights" title="可编辑资料"><?php echo (session('realname')); ?></span>
                    &nbsp;<a href="<?php echo U('/Login/logout');?>" title="退出" class="adminrightslogout">退出</a>
                </span>
            </div>            
        </div>  
        <div id="content-part">
            <div id="left-content">
                <ul class="default">
                    <li class="hover">欢迎页面</li>
                    <li>资料修改</li>
                    <li>系统设置</li>
                    <li>数据维护</li>
                    <li>当前在线</li>
                </ul>
                <ul nav="Setting" class="hidden">
                    <li subnav="index" class="hover"><a href="#">系统设置</a></li>
                    <li subnav="data"><a href="#">数据维护</a></li>
                    <li subnav="visit"><a href="#">历史访问</a></li>                    
                </ul>
                <ul nav="Department" class="hidden">
                    <li subnav="index" class="hover">部门列表</li>
                    <li subnav="add">部门添加</li>
                </ul>
                <ul nav="Class" class="hidden">
                    <li subnav="index" class="hover">班级列表</li>
                    <li subnav="add">班级添加</li>
                </ul>
                <ul nav="Term" class="hidden">
                    <li subnav="index" class="hover">学期列表</li>
                    <li subnav="add">学期添加
                    </li>
                </ul>
                <ul class="score hidden">
                    <li class="hover">导入成绩</li>
                    <li>成绩列表</li>
                </ul>
                <ul nav="Student" class="hidden">
                    <li subnav="index" class="hover">学生列表</li>
                    <li subnav='add'>学生添加</li>
                    <li subnav="import">批量导入</li>
                </ul>
            </div>
            <div id="right-content">
                <iframe class='ifcontent' name='ifcontent' src='<?php echo U('welcome');?>'></iframe>
            </div>
        </div>      
    </div>
</body>
</html>