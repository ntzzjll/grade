<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<title>Document</title>
</head>
<body>
	<table style="width:500px;margin-top:20px;margin-left:20px;">		
		<tr class="header">
			<td>学期名称</td>
			<td>学期开始日期</td>
			<td>学期结束日期</td>
			<td>操作</td>
		</tr>		
		<?php if(is_array($term)): foreach($term as $key=>$v): ?><tr>
				<td>
					<?php echo ($v["tname"]); ?>
				</td>
				<td>
					<?php echo (date('Y-m-d',$v["tstart"])); ?>
				</td>
				<td>
					<?php echo (date('Y-m-d',$v["tend"])); ?>
				</td>
				<td class="center"><a href="<?php echo U('edit',array('did'=>$v['did']));?>">编辑</a>&nbsp;/&nbsp;<a href="<?php echo U('doDel',array('did'=>$v['did']));?>" onclick="return confirm('你确定要删除此条记录吗?');">删除</a></td>
			</tr><?php endforeach; endif; ?>		
	</table>
</body>
</html>