<title>信息记录</title><?php
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   update   teacher_project set `xq`='" . $_POST['xq'] . "',`p_name`='" .  $_POST['p_name'] ."',`jb`='" .  $_POST['jb'] ."' ";
echo $sql;
mysqli_query($link, $sql);
header('Location: teacher_project.php');
?>
