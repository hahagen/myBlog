<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');


$sql="select * from admin where admin.username='" . $_POST['username'] . "'";
echo $sql;
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);



if($row && $row['password'] == $_POST['password']) {
	//设置会话中的信息，记录当前用户的身份
	
	//1.开启会话
	session_start();
	//2.在全局数组$_SESSION中记录用户信息
	$_SESSION['isAdmin'] = 1;
	$_SESSION['username'] = $row['username'];

	header('Location: manage.php');
	
} else {
	echo '密码不正确';
}
?>
</body>
</html>


