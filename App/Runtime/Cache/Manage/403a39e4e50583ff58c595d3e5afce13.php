<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<!-- 导入样式表文件 -->
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href="__PUBLIC__/Css/common.css" rel="stylesheet" />
	<link href='__PUBLIC__/Css/Admin/admin.css' rel="stylesheet" />
	<!-- 导入脚本文件 -->
	<script src="__PUBLIC__/Js/jquery.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Js/admin.js" type="text/javascript"></script>

	<title>Document</title>
	<script type="text/javascript">
		var CONTROL = '__URL__';
	</script>
</head>
<body>
	<div id="loadstd">
		<form action="<?php echo U('importStudent');?>" method="post" enctype="multipart/form-data">
            <table style="width:100%">
            	<tr>
            		<td style="background-color:#EAF8FD;height:40px;text-align:center;padding-left:20px;">
            			<input type="file" name="import"/>
            		</td>
            	</tr>
            	<tr>
            		<td style="text-align:center;height:50px;line-height:50px;">
            			<input type="hidden" name="table" value="tablename"/>
            			<button type="submit" name="loadStudent" class="btn btn-primary">导入数据</button>&nbsp;&nbsp;<span class="notice">(可以导入的数据格式为xls或xls,点击<a href="#">下载</a>导入模板)</span>           			
            		</td>
            	</tr>
            </table>
        </form>

		<!-- <?php if($student != ''): ?><table style="width:100%;margin-top:20px;">
			        	<tr>
			        		<td>学号</td>
			        		<td>真实姓名</td>
			        		<td>登录帐号</td>
			        		<td>登录密码</td>
			        		<td>性别</td>
			        		<td>手机号码</td>
			        		<td>所在班级</td>
			        	</tr>
			        </table><?php endif; ?> -->
        
	</div>
</body>
</html>