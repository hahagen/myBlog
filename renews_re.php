<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改新论文发表信息</title>
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
$sql="select * from teacher_release where uni_id='"  .  $_GET['uni_id']  . "'";
$res=mysqli_query($link,$sql);
while($row=mysqli_fetch_array($res)){?>


</head>

<body>
<div class="b">
<p>修改新论文发表情况信息</p>
  <hr>
  <form method="post" action="re_re_record.php">

    时间<input type="text" name="time" value="<?php echo $row['time'];?>" ><br /><br />
    期刊名称<input type="text" name="q_name" value="<?php echo $row['q_name'];?>" ><br /><br />
    论文名称<input type="text" name="p_name" value="<?php echo $row['p_name'];?>" ><br /><br />
    作者排名<input type="text" name="pm" value="<?php echo $row['pm'];?>"><br /><br />
<br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  <?php }?>
  </div>
</body>
</html>

