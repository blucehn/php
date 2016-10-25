<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>通过控制器加载User模块</title>

    <script>
        function jump() {
            window.location = "/thinkphp/index.php/User/add";
        }
    </script>

</head>
<body>
    <table border="1" width="500px" align="center">
        <tr>
            <td>索引</td>
            <td>用户名</td>
            <td>性别</td>
            <td>操作</td>
        </tr>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($list["id"]); ?></td>
                <td><?php echo ($list["username"]); ?></td>
                <td><?php echo ($list["sex"]); ?></td>
                <td><a href="__URL__/del/id/<?php echo ($list["id"]); ?>">删除</a>| <a href="/thinkphp/index.php/User/modify/id/<?php echo ($list["id"]); ?>">修改</a></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>


    </table>

    <center>
        <button onclick="jump()">添加数据</button>
    </center>
</body>
</html>