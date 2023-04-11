<?php
$con = mysqli_connect("localhost","root","","test");

$sql="SELECT * FROM `students`";
$result=mysqli_query($con,$sql);

$arr=mysqli_fetch_all($result,MYSQLI_ASSOC);

echo json_encode($arr);

// echo "<pre>";
// print_r($arr);
// echo "</pre>";
?>