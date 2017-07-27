<?php
session_start();
$name = $_COOKIE["username"];
$con = mysqli_connect("localhost","","","");
$count = 9;
$times = 0;


$sql = "select * from word where 1 order by code desc limit 0,1";
$sql = mysqli_query($con,$sql);
$last = mysqli_fetch_array($sql);
$ppp = $last["code"];


while($times <= $count)
{
    $tc = rand(0,$ppp);
    $_SESSION["word$times"] = $tc;
    //setcookie("word$times","$tc",time()+3600);
    $times++;
}
?>