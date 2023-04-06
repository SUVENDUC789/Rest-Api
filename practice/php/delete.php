<?php
$con = mysqli_connect("localhost","root","","test");
// echo var_dump($con);
$id=$_POST['sl'];
$sql = "DELETE FROM students WHERE sl=$id";
$result=mysqli_query($con,$sql);
?>

