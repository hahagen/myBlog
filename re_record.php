<title>信息记录</title><?php
var_dump($_POST);

$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql = "   update teacher_info set  `name`='" . $_POST['name'] . "',`sex`='" .  $_POST['sex'] ."',`birthday`='".$_POST['birthday']."',`xl`='".$_POST['xl']."',`zc`='".$_POST['zc']."',`zw`='".$_POST['zw']."',`phone`='".$_POST['phone']."',`email`='" .  $_POST['email'] ."'  where teacher_info.id='".$_POST['id']."'";
echo $sql;
mysqli_query($link, $sql);
header('Location: teacher_xiugai.php');
?>
