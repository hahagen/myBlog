<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>教师获奖列表</title>
<style type="text/css">
.b{
width:1500px;
height:800px;
background:url(bbb.jpg);
text-align:center;
}
.b{margin:20px;}
	.c{font-size:22px;font-weight:bold;text-align:center;}
	.b table{width:100%;margin-top:15px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;min-width:460px;}
	.b table th,.b table td{height:50px;border:1px solid #B5D6E6;}
	.b table th{background-color:#E8F6FC;font-weight:normal;}
	.b table td{text-align:center;}
</style>
</head>

<body>
<h2 class="c">教师获奖列表</h2>

<div class="b">
<?php 
	session_start();
?>

<?php
$tid = $_SESSION['user_id'];

/*echo $tid;

var_dump($_POST);*/
$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');

$sql="select * from `teacher_award` where teacher_id =$tid" ;

/*echo $sql;*/
$res=mysqli_query($link,$sql);


while($row=mysqli_fetch_array($res)){?>

<table>
<tr>
<th>ID</th><th>时间</th><th>奖项名称</th><th>级别</th>
 </tr>
 <tr>
	


			<td><?php echo $row["teacher_id"];?></td>
			<td><?php echo $row["time"];?></td>
			<td><?php echo $row["p_name"];?></td>
			<td><?php echo $row["jb"];?></td>
			</tr>
<?php }?>
</table>



<a href="award_add.php">添加获奖情况</a>
</div>
</body>
</html>
