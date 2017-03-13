<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>You-On EDU 背单词计划</title>
<meta name="ViewPort" content="initial-scale=1, minimum-scale=1, width=device-width">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<p class="title">You-On EDU 背单词计划</p>
<div class="box">
<h2>今天有哪些单词不记得了呢？</h2>
<p class="main">

<?php
session_start();
$un=$_SESSION["username"];
if ($un == "")
{
	echo "<script>alert('少年你的体位不对啊');document.location.href='./index.php'</script>";
	exit;
}
else
{
	echo "<font color=white>欢迎回来，$un</font>";
}
?>

<form action="add.php" method="POST">
<label><font color=white>外语单词：</font><input type="text" name="word"/></label><p></p>
<label><font color=white>中文意思：</font><input type="text" name="mean"/></label><p></p>
<label><font color=white>笔qwq记：</font><input type="text" name="note"/></label><p></p>
<input class="message2" type="submit" name="submit" value="submit" />
<br />
<?php
if (getenv("HTTP_CLIENT_IP"))
	    $ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
	    $ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
	    $ip = getenv("REMOTE_ADDR");
	else $ip = "Unknow";
echo "<font color=white>您的IP地址 $ip 已经被记录，可以安全地使用。</font>";
?>
<a href="./function.php">查看功能表</a>
</div>
<p class="foot"><label><font color=white>YOE背单词委员会</font></p>
</body></html>