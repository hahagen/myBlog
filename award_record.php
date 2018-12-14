<?php 
	session_start();
?>
<title>新获奖记录</title><?php
$Id = $_SESSION['user_id'];
echo $Id;
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   insert into teacher_award(`teacher_id`,`time`,`jb`,`p_name`) values ('$Id','" . $_POST['time'] . "','" .  $_POST['jb'] ."','" .  $_POST['p_name'] ."')";
echo $sql;
mysqli_query($link, $sql);
header('Location: teacher_award.php');
?>
