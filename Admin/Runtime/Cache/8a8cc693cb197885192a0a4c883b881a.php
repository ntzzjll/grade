<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<title>Document</title>
</head>
<body>
	<form method="post" action="#">
		<table class="table table-hover" style="width:90%;margin-top:20px;" align="center">
			<tr>
				<td style="padding-top:15px;">网站标题</td>
				<td><input type="text" class="form-control" name="webtitle" value="<?php echo C('WEB_TITLE');?>" size="50" /></td>
			</tr>
			<tr>
				<td>网站维护</td>
				<td>
					<input type="checkbox" value="" />&nbsp;&nbsp;是
				</td>
			</tr>
			<tr>
				<td style="padding-top:15px;">管理员邮箱</td>
				<td><input type="text" class="form-control" name="webtitle" value="<?php echo C('WEB_EMAIL');?>" size="50" /></td>
			</tr>
			<tr>
				<td style="padding-top:15px;">数据备份路径</td>
				<td><input type="text" class="form-control" name="webtitle" value="<?php echo C('DATA_KEEP');?>" size="50" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="button" class="btn btn-default">保存设置</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>