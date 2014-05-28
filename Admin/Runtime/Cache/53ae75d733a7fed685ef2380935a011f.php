<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link href='__PUBLIC__/Css/bootstrap.css' rel="stylesheet" />
	<link href='__PUBLIC__/Css/common.css' rel="stylesheet" />
	<title>Document</title>
</head>
<body>
	<form action="<?php echo U('changeOrder');?>" method="post">
		<table style="width:500px;margin-top:20px;margin-left:20px;">		
			<tr class="header">
				<td>专业部名称</td>
				<td>序号</td>
				<td>操作</td>
			</tr>		
			<?php if(is_array($department)): foreach($department as $key=>$v): ?><tr>
					<td>
						<?php echo ($v["dname"]); ?>
						<?php if($v['dphone'] != ''): ?>[办公电话:<?php echo ($v["dphone"]); ?>]<?php endif; ?>
					</td>
					<td style="width:60px;"><input type="text" name="order_<?php echo ($v["did"]); ?>" value="<?php echo ($v["dorder"]); ?>" class="form-control"/></td>
					<td class="center"><a href="<?php echo U('edit',array('did'=>$v['did']));?>">编辑</a>&nbsp;/&nbsp;<a href="<?php echo U('doDel',array('did'=>$v['did']));?>" onclick="return confirm('你确定要删除此条记录吗?');">删除</a></td>
				</tr><?php endforeach; endif; ?>		
			<tr class="footer">
				<td colspan="3"><button type="submit" class="btn btn-primary">更新顺序</button></td>
			</tr>
		</table>
	</form>
</body>
</html>