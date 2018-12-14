 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改科研项目</title>
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

<?php 
$link=mysqli_connect('localhost','root','');
if(!$link){
   die('连接数据库失败！');
}
mysqli_query($link, 'set names utf8');
mysqli_query($link, 'use `teacher`');
$sql="select * from teacher_project where uni_id='"  .  $_GET['uni_id']  . "'";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res)){?>

<div class="b">
<p>修改科研项目</p>
  <hr>
  <form method="post" action="pro_renews_record.php">
  	
     学期<input type="text" name="xq" value="<?php echo $row['xq'];?>" ><br /><br />
    项目名称<input type="text" name="p_name"  value="<?php echo $row['p_name'];?>"><br /><br />
    
    项目级别<input type="text" name="jb" value="<?php echo $row['jb'];?>" ><br /><br />
  
    <br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  <?php }?>
  </div>
</body>
</html>
