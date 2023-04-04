<?php
$con = mysqli_connect("localhost","root","","test");

$id =$_POST['id'];
$fn=$_POST['fsname'];
$ln=$_POST['lasname'];



$sql = "UPDATE `students` SET `first_name` = \'$fn\'  WHERE `students`.`sl` = $id";
$result = mysqli_query($con,$sql);

$sql = "UPDATE `students` SET `last_name` = \'$ln\' WHERE `students`.`sl` = $id";
$result = mysqli_query($con,$sql);


echo 
?>