<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
date_default_timezone_set("Asia/Shanghai");
$word = $_POST["word"];
$mean = $_POST["mean"];
$note = $_POST["note"];
$date = date('Y-m-d H:i:s');


@$con = mysql_connect("localhost","word","word");
if(!$con)
{
    die('与数据库建立连接失败,请联系luobogao修复数据库！1.可能是数据库掉线;2.可能是服务器预存密码错误');
}
mysql_select_db("word",$con)
or die("数据库不存在");

$sql_insert = "insert into word (add_time,word,mean,note) values('$date','$word','$mean','$note')";
$res_insert = mysql_query($sql_insert);
if($res_insert)
{
	echo "<script>alert('添加成功'); history.go(-1);</script>";
}
else
{
	echo "<script>alert('添加失败'); history.go(-1);</script>";
}

mysql_close();
?>