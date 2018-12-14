<?php
var_dump($_POST);

if(true){
	//连接数据库
$link=mysqli_connect('localhost','root','');
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
	
if(!$link){
   die('连接数据库失败！');
}
$sql="select * from users where users.username='" . $_POST['username'] . "'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
if($row && $row['password'] == $_POST['password']){
	session_start();
	$_SESSION['user_id'] = $row['id'];
	header('Location: teacher_xinxi.php');
}



	$user_id= $sql;

	
}?>