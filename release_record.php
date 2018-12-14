<?php 
	session_start();
?>
<title>论文记录</title><?php
$Id = $_SESSION['user_id'];
echo $Id;
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   insert into teacher_release(`teacher_id`,`time`,`q_name`,`p_name`,`pm`) values ('$Id','" . $_POST['time'] . "','" .  $_POST['q_name'] ."','" .  $_POST['p_name'] ."','".$_POST['pm']."')";
echo $sql;
mysqli_query($link, $sql);
header('Location: teacher_release.php');
?>
