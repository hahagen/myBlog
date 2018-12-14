<title>删除</title><?php

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');



$sql="delete from teacher_info where teacher_info.id='"  . $_GET['id'] . "'";
echo $sql;
mysqli_query($link, $sql);

header('Location: teacher_xiugai.php');
?>