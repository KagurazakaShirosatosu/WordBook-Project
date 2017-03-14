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
<h2>dalao还没有登录！</h2>
<p class="main">

<form action="./function/login-deal.php" method="post">
<label><font color=white>君の名は：</font><input type="text" name="name"/></label><p></p>
<label><font color=white>你的密码：</font><input type="password" name="password"/></label><p></p>
<input class="message2" type="submit" name="submit" value="登陆" />
<br />
<?php
session_start();
if (getenv("HTTP_CLIENT_IP"))
	    $ip = getenv("HTTP_CLIENT_IP");
	else if(getenv("HTTP_X_FORWARDED_FOR"))
	    $ip = getenv("HTTP_X_FORWARDED_FOR");
	else if(getenv("REMOTE_ADDR"))
	    $ip = getenv("REMOTE_ADDR");
	else $ip = "Unknow";
$_SESSION["ip"] = $ip;
echo "<font color=white>您的IP地址 $ip 已经被记录，可以安全地使用。</font>";
?>
</div>
<p class="foot"><label><font color=white>YOE背单词委员会</font></p>
</body></html>