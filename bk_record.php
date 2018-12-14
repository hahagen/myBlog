<?php 
	session_start();
?>
<title>本科生上课情况新纪录</title><?php
$Id = $_SESSION['user_id'];
echo $Id;
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   insert into teacher_bk(`teacher_id`,`xq`,`kcm`,`kcxz`,`class`,`number`,`bzks`) values ('$Id','" . $_POST['xq'] . "','" .  $_POST['kcm'] ."','" .  $_POST['kcxz'] ."','".$_POST['class']."','".$_POST['number']."','".$_POST['bzks']."')";
echo $sql;
mysqli_query($link, $sql);
header('Location: teacher_bk.php');
?>
