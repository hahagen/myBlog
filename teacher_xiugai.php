<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>教师信息</title>
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
<h2 class="c">教师信息列表</h2>

<div class="b">
<?php
$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link,'set names utf8');
mysqli_query($link,'use `teacher`');


$sql="select * from `teacher_info`";


$res=mysqli_query($link,$sql);


while($row=mysqli_fetch_array($res)){?>

<table>
	<tr>
<th>姓名</th><th>ID</th><th>性别</th><th>生日</th><th>学历</th><th>职称</th><th>职务</th><th>电话</th><th>邮箱</th><th>相关操作</th>
 </tr>
 <tr>
            
          <td><?php echo $row['name'];?></td>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['sex'];?></td>
			<td><?php echo $row['birthday'];?></td>
			<td><?php echo $row['xl'];?></td>
			<td><?php echo $row['zc'];?></td>
			<td><?php echo $row['zw'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo '<a href="renews.php?id='.$row['id'].' ">修改</a> <a href="delete.php?id='.$row['id'].' ">删除</a>'?> </td>
			
	</tr>
<?php }?>
  


</table>
</div>
</body>
</html>