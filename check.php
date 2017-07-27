<!DOCTYPE html>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>You-On EDU 背单词计划</title>
<meta name="ViewPort" content="initial-scale=1, minimum-scale=1, width=device-width">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<link rel="stylesheet" href="css/style.css">
<link href="https://youon.moe/pic/logo1.png" rel="shortcut icon">
</head>
<body>
<p class="title">You-On EDU 背单词计划</p>
<div class="box">
<h2>OvO</h2>
<p class="main">
<?php
$un=$_COOKIE["username"];
if ($un == "")
{
	echo "<script>alert('对有机生命体接触用资料库不能识别你的身份，你将被驱逐。');document.location.href='./index.php'</script>";
	exit;
}
else
{
	
}
?>
<center>


<?php
session_start();
$con=mysqli_connect("localhost","word","word","word");
$count=9;
$times=0;

echo '<table border="4">';
echo '<tr> <td>中文</td> <td>正确的</td> <td>你写的</td> <td>对错</td> </tr>';

while ($times<$count){
	//echo $_SESSION["word$times"];
	$sql="SELECT * FROM `word` WHERE `code` = '".$_SESSION["word$times"]."'";
	$sql=mysqli_query($con,$sql);
	$query=mysqli_fetch_array($sql);
	$qwq = $query["word"];
	
	$tt = $_SESSION["word$times"];
	
	if (strtolower($_GET["$tt"]) <> strtolower($qwq))
	{
	    $pwp = $_GET["$qwq"];
	    echo "<tr>";
	    echo "<td>".$query['mean']."</td>";
	    echo "<td>".$query['word']."</td>";
	    echo "<td>".$_GET["$tt"]."</td>";
	    echo "<td><font color=red><b>×</b></font></td>";
	}
	elseif (strtolower($_GET["$tt"]) == strtolower($qwq))
	{
	    $pwp = $_GET["$qwq"];
	    echo "<tr>";
	    echo "<td>".$query['mean']."</td>";
	    echo "<td>".$query['word']."</td>";
	    echo "<td>".$_GET["$tt"]."</td>";
	    echo "<td><font color=green><b>√</b></font></td>";
	}
	else
	{
	    echo "出现错误。";
	}
	$times=$times+1;
}
exit;
?>



<p></p>
<a href="./main.php">返回首页</a>
<a href="./dic.php">再来一遍</a>
</center>


