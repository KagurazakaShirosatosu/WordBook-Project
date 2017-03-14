<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
$ip = $_SESSION["ip"];
$date = date('Y-m-d H:i:s');

	if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")
	{
		$a = $_POST["name"];
		$b = $_POST["password"];
		
		$str1 = $a;
		$str1 = str_replace('"','&quot;',$str1);
		$str1 = str_replace('<','&lt;',$str1);
		$str1 = str_replace('>','&gt;',$str1);
		$a = str_replace('\'','&#x27;',$str1);

		$str2 = $b;
		$str2 = str_replace('"','&quot;',$str2);
		$str2 = str_replace('<','&lt;',$str2);
		$str2 = str_replace('>','&gt;',$str2);
		$b = str_replace('\'','&#x27;',$str2);
		
		if($a == "")
		{
			echo "<script>alert('请输入用户名！'); history.go(-1);</script>";
		}
		elseif($b == "")
		{
		    echo "<script>alert('请输入密码！'); history.go(-1);</script>";
		}
		else
		{
		    $con = @mysqli_connect("localhost","word","word","word");
		    if(!$con)
		    {
		        die('数据库挂了');
		    }
		    $sql = "select namae,passwd from classmate where namae = '$_POST[name]' and passwd = '$_POST[password]'"; 
		    $result = mysqli_query($con,$sql);
            $num = @mysqli_num_rows($result);
            if($num)
            {
				$_SESSION['username'] = $a;
				echo "请稍微等待一下。";
				$sql_insert = "UPDATE `classmate` SET `lastlog_ip` = '$ip' WHERE `classmate`.`namae` = '$a'";
				$res_insert = @mysqli_query($con,$sql_insert);
				$sql_insert = "UPDATE `classmate` SET `lastlog_time` = '$date' WHERE `classmate`.`namae` = '$a'";
				$res_insert = @mysqli_query($con,$sql_insert);
                echo "<script>alert('对有机生命体接触用资料库已匹配你的身份，欢迎回来。');document.location.href='../main.php'</script>";

            }
            else
            {
                echo "<script>alert('不存在的人');history.go(-1);</script>";
            }
		}
	}
	else
	{
		echo "<script>alert('姿势不正确'); history.go(-1);</script>";
	}

?>