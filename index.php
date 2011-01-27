<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>陈若涵的数据库课程设计</title>
</head>
<body>
<h1><a href="index.php">学生成绩管理<sub title="Crhan"><small>By Crhan</small></sub></a></h1>
<h2>《数据库原理及应用》短学期课程设计(大型实验)</h2>
<div>
<h3>请点击下面的按钮完成查询</h3>
<div style="width:560px;text-align:center;height:70px">
<form name="form1" method="post" action="" class="formButton">
<input name="a" value="学年成绩统计" type="submit" />
<input name="a" value="学生名次排定" type="submit" />
<input name="a" value="课程平均成绩" type="submit" />
<input name="a" value="学生学分统计" type="submit" />
<input name="a" value="学生成绩查询" type="submit" />
<input name="a" value="教师任课查询" type="submit" />
<input name="a" value="班级开课查询" type="submit" />
</form>
</div>
<div style="width:560px;text-align:center">
<?php
require("query.php");
?>
</div>
</div>
</body>
</html>
<div id="footer">
<p>2011 © <a href="http://crhan.info/">EGGACHE PROJECT</a></p>
</div>
