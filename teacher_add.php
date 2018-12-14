<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加教师信息</title>
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
 <p>添加教师信息</p>
  <hr>
  <form method="post" action="add_record.php">
  
    教师姓名<input type="text" name="name" id="name"><br /><br />
    <!--教师工号<input type="text" name="id" id="id"><br /><br />-->
    
    教师性别<input type="text" name="sex"  id="sex">
        <br /><br />
    出生年月<input type="text" name="birthday" id="birthday"><br /><br />
    教师学历<input type="text" name="xl" id="xl"><br /><br />
    教师职称<input type="text" name="zc" id="zc"><br /><br />
    教师职务<input type="text" name="zw" id="zw"><br /><br />
    教师电话<input type="text" name="phone" id="phone"><br /><br />
    教师邮箱<input type="text" name="email" id="email">
    <br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  </div>
</body>
</html>
