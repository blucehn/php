<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>测试一下</title>
</head>
<body>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h1><?php echo ($vo["Id"]); ?>---<?php echo ($vo["FirstName"]); ?>---<?php echo ($vo["LastName"]); ?>---<?php echo ($vo["Address"]); ?></h1><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>