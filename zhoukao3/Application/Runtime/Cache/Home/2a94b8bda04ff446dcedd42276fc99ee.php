<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<center>
    <form action="add.php" method="post">
        <table class="table" border="1">
            <tr>
                <td>新闻标题</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>新闻内容</td>
                <td><input type="text" name="demo"></td>
            </tr>
            <tr>
                <td>发布时间</td>
                <td><input type="date" name="time"></td>
            </tr>
            <tr>
                <td><input type="submit" value="提交"></td>
                <td><input type="reset" value="重置"></td>
            </tr>
        </table>
    </form>
</center>
</body>
</html>