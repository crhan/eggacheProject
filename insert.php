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
<input name="a" value="专业注册" type="submit" />
<input name="a" value="班级注册" type="submit" />
<input name="a" value="学生注册" type="submit" />
<input name="a" value="教师注册" type="submit" />
<input name="a" value="课程注册" type="submit" />
<input name="a" value="学生选课" type="submit" />
<input name="a" value="成绩输入" type="submit" />
</form>
</div>
<div style="width:560px;text-align:center">
<form name="form2" method="post" action="" class="formButton">
<fieldset>
<legend>专业注册</legend>
<table align="center" border="0px none">
<tr>
<td>
<label for="daihao">课程代号crh:</label></td>
<td><input name="daihao" id="daihao" type="text" /></td>
</tr>
<tr>
<td><label for="zhuanyeming">专业名crh:</label></td>
<td><input name="zhuanyeming" id="zhuanyeming" type="text" /><br /></td>
</tr>
<tr>
<input name="a" type="hidden" value="专业注册" />
<td colspan="2"><input type="submit" value="注册crh" />
<input type="reset" value="重置crh" /></td>
</tr>
</table>
</fieldset>
</form>
</div>
<div style="width:560px;text-align:center">
<?php
require("query.php");
?>
</div>
</div>
<div id="footer">
<p>2011 © <a href="http://crhan.info/">EGGACHE PROJECT</a></p>
</div>
</body>
</html>
