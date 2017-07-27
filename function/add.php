<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$name = $_COOKIE['username'];
date_default_timezone_set("Asia/Shanghai");
$word = $_POST["word"];
$mean = $_POST["mean"];
$note = $_POST["note"];
$date = date('Y-m-d H:i:s');


require("./stopXSS.php");

@$con = mysqli_connect("localhost","","","");
if(!$con)
{
    die('数据库炸了');
}


$sql = "select * from word where 1 order by code desc limit 0,1";
$sql = mysqli_query($con,$sql);
$last = mysqli_fetch_array($sql);
$ppp = $last["code"];
$real_last = $ppp +1;

$sql_insert = "insert into word (code,namae,add_time,word,mean,note) values('$real_last','$name','$date','$word','$mean','$note')";
$res_insert = mysqli_query($con,$sql_insert);
if($res_insert)
{
	echo "<script>alert('添加成功'); history.go(-1);</script>";
}
else
{
	echo "<script>alert('添加失败'); history.go(-1);</script>";
}

mysql_close($con);
?>