<?php
    include('connection.php');
    $id = $_GET['id'];

    $query = "SELECT * FROM `training`.`academicinfo` WHERE `academicinfo`.`id` = $id";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    print_r($row);
    //var_dump($row);
?>
<br />
<a href="list.php">Goto List</a>