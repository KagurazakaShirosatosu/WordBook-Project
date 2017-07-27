<?php
session_start();
$con=mysqli_connect("localhost","","","");
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
	
	if ($_POST["$qwq"] <> $qwq)
	{
	    $pwp = $_POST["$qwq"];
	    echo "<tr>";
	    echo "<td>".$query['mean']."</td>";
	    echo "<td>".$query['word']."</td>";
	    echo "<td>".$pwp."</td>";
	    echo "<td><font color=red>×</font></td>";
	}
	elseif ($_POST["$qwq"] = $qwq)
	{
	    $pwp = $_POST["$qwq"];
	    echo "<tr>";
	    echo "<td>".$query['mean']."</td>";
	    echo "<td>".$query['word']."</td>";
	    echo "<td>".$pwp."</td>";
	    echo "<td><font color=green>×</font></td>";
	}
	else
	{
	    echo "出现错误。";
	}
	$times=$times+1;
}
exit;
?>