<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<title>Document</title>
</head>
<body>
	<table style="width:800px;margin-top:20px;margin-left:20px;">		
		<tr class="header">
			<td>班级编号</td>
			<td>班级名称</td>
			<td>班主任</td>
			<td>班主任电话</td>
			<td>所属部门</td>
			<td>操作</td>
		</tr>		
		<?php if(is_array($class)): foreach($class as $key=>$v): ?><tr>
				<td><?php echo ($v["ccode"]); ?></td>
				<td><?php echo ($v["cname"]); ?></td>
				<td><?php echo ($v["cmaster"]); ?></td>
				<td><?php echo ($v["cmasterphone"]); ?></td>
				<td><?php echo ($v["dname"]); ?></td>
				<td class="center"><a href="<?php echo U('edit',array('did'=>$v['did']));?>">编辑</a>&nbsp;/&nbsp;<a href="<?php echo U('doDel',array('cid'=>$v['cid']));?>" onclick="return confirm('你确定要删除此条记录吗?');">删除</a></td>
			</tr><?php endforeach; endif; ?>		
		<!-- <tr class="footer">
			<td colspan="6">
				
			</td>
		</tr> -->
	</table>
</body>
</html>