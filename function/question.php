
<?php
session_start();
$con=mysqli_connect("localhost","","","");
$count=9;
$times=0;
echo '<form action="./check.php" method="GET">';
echo '<table border="2">';
	echo '<tr>
	        <td>中文</td>
	        <td>外文</td>
	        </tr>';
while ($times<$count){
	//echo $_SESSION["word$times"];
	$sql="SELECT * FROM `word` WHERE `code` = '".$_SESSION["word$times"]."'";
	$sql=mysqli_query($con,$sql);
	$query=mysqli_fetch_array($sql);
	echo "<tr>";
	echo "<td>".$query['mean']."</td>";
	//echo "<td>".$query['word']."</td>";
	echo "<td><input type='text' name=".$query["code"]."></td>";
	$times=$times+1;
}
echo "<input class='message2' type='submit' name='submit' value='submit' />";