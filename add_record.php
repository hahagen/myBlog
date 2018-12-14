<?php
var_dump($_POST);
$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link,'set names utf8');
mysqli_query($link,'use `teacher`');
;
$sql="insert into teacher_info(`name`,`sex`,`birthday`,`xl`,`zc`,`zw`,`phone`,`email`) values ('". $_POST['name'] ."','". $_POST['sex'] ."','". $_POST['birthday'] ."','". $_POST['xl'] ."','". $_POST['zc'] ."','". $_POST['zw'] ."','".$_POST['phone']."','". $_POST['email'] ."')";
echo $sql;
mysqli_query($link,$sql);
/*$sql="insert into teacher_info values ('".$_POST['name']."','".$_POST['id']."','".$_POST['sex']."','".$_POST['birthday']."','".$_POST['xl']."','".$_POST['zc']."','".$_POST['zw']."','".$_POST['phone']."','".$_POST['email']."')";*/
//echo $sql;
header('Location: teacher_xiugai.php');
?>