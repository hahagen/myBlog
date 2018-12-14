<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加新获奖情况</title>
<style type="text/css">
.b{
width:1800px;
height:900px;
background:url(bbb.jpg);
text-align:center;
}

</style>
</head>

<body>
<div class="b">
<p>添加新获奖发表情况信息</p>
  <hr>
  <form method="post" action="award_record.php">
    时间<input type="text" name="time" ><br /><br />
    奖项名称<input type="text" name="p_name" ><br /><br />
    级别<input type="text" name="jb" ><br /><br />
    <br />
    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="清除">
  </form>
  </div>
</body>
</html>
