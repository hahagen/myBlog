<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改</title>
<style type="text/css">
.b{
width:1800px;
height:800px;
background:url(bbb.jpg);
text-align:center;
}

</style>
</head>

<body>
<div class="b">
<?php 
$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql="select * from teacher_info where teacher_info.id='"  . $_GET['id'] . "'";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res)){?>




<p>修改教师信息</p>
  <hr>
  <form method="post" action="re_record.php">
  	
    教师姓名<input type="text" name="name" value="<?php echo $row['name'];?>"/><br />
    教师工号<input type="text" name="id"  value="<?php echo $row['id'];?>"><br />
    教师性别<input type="text" name="sex" value="<?php echo $row['sex'];?>"><br />
    出生年月<input type="text" name="birthday"  value="<?php echo $row['birthday']; ?>"><br />
    教师学历<input type="text" name="xl" value="<?php echo $row['xl'];?>"><br />
    教师职称<input type="text" name="zc" value="<?php echo $row['zc'];?>"><br />
    教师职务<input type="text" name="zw" value="<?php echo $row['zw'];?>"><br />
    教师电话<input type="text" name="phone" value="<?php echo $row['phone'];?>"><br />
    教师邮箱<input type="text" name="email" value="<?php echo $row['email'];?>">
    <br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  <?php }?>
  </div>
</body>
</html>
