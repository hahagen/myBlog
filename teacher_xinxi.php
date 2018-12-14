<html>
<title>个人基本信息</title>
<style type="text/css">
.b{
width:1500px;
height:800px;
background:url(bbb.jpg);

}
.b{margin:20px;}
	.b.title{font-size:22px;font-weight:bold;text-align:center;}
	.b table{width:100%;margin-top:15px;border-collapse:collapse;font-size:12px;border:1px solid #B5D6E6;min-width:460px;}
	.b table th,.b table td{height:50px;border:1px solid #B5D6E6;}
	.b table th{background-color:#E8F6FC;font-weight:normal;}
	.b table td{text-align:center;}
	.nav ul{
	width:980px;
	margin:0px auto;
	height:38px;
	padding:0;
	}
	.nav ul li{
	float:left;
	}
	.nav ul li a{
	width:150px;
	height:35px;
	line-height:28px;
	background:#99FF66;
	color:#000000;
	margin:5PX 10PX;
	font-size:12PX;
	display:block;
	text-align:center;
	text-decoration:none;
	}
	.nav ul li a:hover{
	width:150px;
	height:30px;
	line-height:40px;
	border:1px solid red;
	color:red;
	background:#FFF;
	}
	
</style>
<body>
<div class="b">

<?php
session_start();
$userId = $_SESSION['user_id'];
/*var_dump($_POST);*/
$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql="select * from `teacher_info` where teacher_info.id IN ($userId)" ;


$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res)){?>

<div class="title">教师个人信息列表</div>
<table>
<tr>
<th>姓名</th><th>ID</th><th>性别</th><th>生日</th><th>学历</th><th>职称</th><th>职务</th><th>电话</th><th>邮箱</th>
 <tr>
 <!--{
	echo "<tr>";  
   /* foreach($row as $v)*/{
	/* echo "<td>".$v."</td>";
	}*/-->
            
            <td><?php echo $row['name'];?></td>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['sex'];?></td>
			<td><?php echo $row['birthday'];?></td>
			<td><?php echo $row['xl'];?></td>
			<td><?php echo $row['zc'];?></td>
			<td><?php echo $row['zw'];?></td>
			<td><?php echo $row['phone'];?></td>
			<td><?php echo $row['email'];?></td>
            <!--<td><?php echo '<a href="teacher_release.php">论文发表</a><br/><a href="teacher_project.php">科研项目表</a><br/>  <a href="teacher_award.php">获奖情况</a> <br/>   <a href="student_guanli.php">学生管理</a><br/>  ';?></td>-->
	</tr>

    <?php }?> 
    
  </table>
   <div class="nav">
   <ul> 
  <li> <a href="teacher_release.php" a><span >论文发表</span></a></li>
  
<li><a href="teacher_project.php"><span>科研项目表</span></a></li>
<li><a href="teacher_award.php">获奖情况</a></li><li><a href="student_guanli.php">学生管理
</a></li>
<li>
<a href="login_admin.php">管理员功能</a></li>

   </ul>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="teacher_release.php"><img src="论文.bmp" width="147" height="100"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="teacher_project.php"><img  src="keyan.jpg" width="147" height="100"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="teacher_award.php"><img src="获奖.jpg" width="140" height="100"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="student_guanli.php"><img src="学生管理.bmp" width="140" height="100"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="login_admin.php"><img  src="untitled.bmp" width="140" height="100"></a></div>

</body>
</html>
