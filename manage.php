<?php
	//当前用户是不是管理员
	
	//1.开启会话
	session_start();
	
	//2.使用$_SESSION数据中的数据
	if(!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
		header('Content-Type: text/html; charset=utf-8');
		die('您不是管理员，不能使用此功能');
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>欢迎管理员<?php echo $_SESSION['username'];?></title>
<style type="text/css">
.b{
width:1800px;
height:800px;
background:url(bbb.jpg);
text-align:center;
}

</style>
</head>

<body>
<div class="b">
<a href='teacher_add.php'>添加教师信息</a><br/>
<a href='teacher_xiugai.php'>修改教师信息</a><br/>
<a href='teacher_delete.php'>删除教师信息</a>
</div>
</body>
</html>
