<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<script src="__PUBLIC__/Js/jquery.js" type="text/javascript"></script>
	<script src="__PUBLIC__/Js/teacher.js" type="text/javascript"></script>
	<title>Document</title>
	<script type="text/javascript">
	var CONTROL = '__URL__';
	</script>
</head>
<body>
	<table style="width:95%;margin-top:20px;margin-left:20px;" >
		<tr>
			<td style="width:100px;" class="header">选择学期</td>
			<td>
				<select name="selterm" id="selterm" class="form-control">
					<option value="0">--请选择学期--</option>
					<?php if(is_array($term)): foreach($term as $key=>$v): ?><option value="<?php echo ($v["tid"]); ?>"><?php echo ($v["tname"]); ?></option><?php endforeach; endif; ?>
				</select>
			</td>
			<td style="width:100px;" class="header">选择班级</td>
			<td>
				<select name="selclass" id="selclass" class="form-control">
					<option value="0">--请选择班级--</option>
				</select>
			</td>
			<td style="width:100px;" class="header">选择课程</td>
			<td>
				<select name="selcourse" id="selcourse" class="form-control">
					<option value="0">--请选择课程--</option>
				</select>
			</td>
			<td align="center">
				<button class="btn btn-primary">生成学生模型</button>
			</td>
		</tr>
	</table>
</body>
</html>