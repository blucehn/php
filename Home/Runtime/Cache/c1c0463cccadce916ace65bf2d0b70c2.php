<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加数据</title>
</head>
<body>
    <form action="/thinkphp/index.php/User/create" method="post">
        姓名:<input type="text" name="username"><br/>
        性别:男<input type="radio" name="sex" value="1" checked="checked">
            女<input type="radio" name="sex" value="0"><br/>
        <input type="submit" value="提交数据">
    </form>
</body>
</html>