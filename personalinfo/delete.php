<?php
//include('connect.php');
$con=mysqli_connect("localhost","root","lict@2","training") or die("Error: ".mysqli_error($con));

$id=$_GET['id'];
$query="DELETE FROM `training`.`personalinfo` WHERE `personalinfo`.`id` = $id";
mysqli_query($con,$query);
header('location: list.php');
mysqli_close($con);
?>