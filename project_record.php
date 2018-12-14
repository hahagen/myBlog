<?php 
	session_start();
?>
<title>科研项目记录</title><?php
$Id = $_SESSION['user_id'];
echo $Id;
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   insert into teacher_project(`teacher_id`,`xq`,`p_name`,`jb`) values ('$Id','" . $_POST['xq'] . "','" .  $_POST['p_name'] ."','" .  $_POST['jb'] ."')";
echo $sql;
mysqli_query($link, $sql);
header('Location: teacher_project.php');
?>
