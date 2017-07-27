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
<h2>现在是默写时间</h2>
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
if (isset($_SESSION["word0"])){
	require("./function/question.php");
}
elseif (!isset($_SESSION["word0"])){
	require("./function/ce_random.php");
	echo "<font color='white'>随机单词生成完毕，请刷新页面。</font>";
}else {
	echo "Something error, Please contact the admin.";
}
?>
<a href="./main.php">返回首页</a>
</center>


