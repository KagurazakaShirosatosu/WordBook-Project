<?php
$con = mysqli_connect("localhost","word","word","word");
if (!$con)
{
	die('数据库炸了');
}
$gou = "SELECT * from word";
$li = mysqli_query($con,$gou);
$guo = mysqli_num_rows($li);
if ($guo)
{
	$jia = mysqli_query($con,"SELECT add_time,word,mean,note FROM word")
	or die('数据表炸了');
	echo '<table border="2">';
	echo
	'<tr>
    <td>添加时间</td>
    <td>外语单词</td>
    <td>中文意思</td>
    <td>备注</td>
    </tr>';
	while ($sheng = mysqli_fetch_array($jia))
	{
		echo "<tr>";
		echo "<td>" . $sheng['add_time'] . "</td>";
		echo "<td>" . $sheng['word'] . "</td>";
		echo "<td>" . $sheng['mean'] . "</td>";
		echo "<td>" . $sheng['note'] . "</td>";
		echo "</tr>";
	}
	mysqli_close($con);
}
else
{
	echo "<script>alert('未知错误，请先续一秒');</script>";
}
?>