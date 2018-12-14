<title>记录</title><?php
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   insert into users(`username`,`password`,`email`) values ('" . $_POST['username'] . "','" .  $_POST['password'] ."','" .  $_POST['email'] ."')";
mysqli_query($link, $sql);
header('Location:denglu.php');
?>

<br/>