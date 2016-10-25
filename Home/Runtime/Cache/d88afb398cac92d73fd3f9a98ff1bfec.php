<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改<?php echo ($data["username"]); ?>的信息</title>

    <script>
        window.onload = function () {
            if ("<?php echo ($data["sex"]); ?>" == 0){
                document.getElementsByName("sex")[1].checked = "checked";
            }else {
                document.getElementsByName("sex")[0].checked = "checked";
            }
        }
    </script>

</head>
<body>
    <form action="/thinkphp/index.php/User/update" method="post">
        <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
        用户名:<input type="text" name="username" value="<?php echo ($data["username"]); ?>"/><br>
        性别:男<input type="radio" name="sex" value="1" checked="checked"/>
            女<input type="radio"  name="sex" value="0"/><br/>
        <input type="submit" value="提交修改"/><br>
    </form>
</body>
</html>