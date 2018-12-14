<?php 
	session_start();
?>
<title>本科生论文添加新记录</title><?php
$Id = $_SESSION['user_id'];
echo $Id;
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   insert into teacher_bl(`teacher_id`,`xq`,`nj`,`zy`,`number`) values ('$Id','" . $_POST['xq'] . "','" .  $_POST['nj'] ."','" .  $_POST['zy'] ."','".$_POST['number']."')";
echo $sql;
mysqli_query($link, $sql);
header('Location: teacher_bl.php');
?>
