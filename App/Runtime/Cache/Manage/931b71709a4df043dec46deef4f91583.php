<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('doAddClass');?>" method="post">
		<table style="width:400px;margin-top:20px;margin-left:20px;" >
			<tr class="header"><td colspan="2">班级添加窗口</td></tr>
			<tr>
				<td class="header">所在专业部</td>
				<td>
					<select class="form-control" name="selDepartment">
						<option value="0">--请选择部门--</option>
					<?php if(is_array($department)): foreach($department as $key=>$v): ?><option value="<?php echo ($v["did"]); ?>"><?php echo ($v["dname"]); ?></option><?php endforeach; endif; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="header">班级编号</td>
				<td><input type="text" class="form-control" name="txtClassCode"  placeholder="请输入班级编号，如1117" /> </td>
			</tr>
			<tr>
				<td class="header">班级名称</td>
				<td><input type="text" class="form-control" name="txtClassName"  placeholder="请输入班级名称" /> </td>
			</tr>
			<tr>
				<td class="header">班主任</td>
				<td><input type="text" class="form-control" name="txtMasterName"  placeholder="请输入班主任姓名" /> </td>
			</tr>
			<tr>
				<td class="header">联系电话</td>
				<td><input type="text" class="form-control" name="txtMasterPhone"  placeholder="请输入班主任联系电话" /> </td>
			</tr>
			<tr class="footer">
				<td colspan="2">
					<button type="submit" class="btn btn-primary">添加班级信息</button>
					<button type="button" class="btn btn-primary" onclick="window.location.href='<?php echo U('index');?>';">返回列表</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>