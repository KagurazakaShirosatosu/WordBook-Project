<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
session_start();
	if(isset($_POST["submit"]) && $_POST["submit"] == "登陆")
	{
		$a = $_POST["name"];
		$b = $_POST["password"];
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
				echo $_SESSION['username'];
                echo "<script>alert('欢迎回来');document.location.href='./main.php'</script>";

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