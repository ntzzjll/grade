<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('doAddDepartment');?>" method="post">
		<table style="width:400px;margin-top:20px;margin-left:20px;">
			<tr class="header"><td colspan="2">部门添加窗口</td></tr>
			<tr>
				<td class="header">部门名称</td>
				<td><input type="text" class="form-control" name="txtDepartmentName"  placeholder="请输入部门名称" /> </td>
			</tr>
			<tr>
				<td class="header">联系电话</td>
				<td><input type="text" class="form-control" name="txtDepartmentPhone"  placeholder="请输入部门联系电话" /> </td>
			</tr>
			<tr class="footer">
				<td colspan="2">
					<button type="submit" class="btn btn-primary">添加部门信息</button>
					<button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo U('index');?>';">返回列表</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>