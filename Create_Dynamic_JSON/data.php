<?php

$conn = mysqli_connect("localhost","root","","test");

// echo var_dump($conn);

$sql = "SELECT * FROM `students`";

$result = mysqli_query($conn,$sql);

$output = mysqli_fetch_all($result,MYSQLI_ASSOC);

$json_data=json_encode($output,JSON_PRETTY_PRINT);

$date = date("d-m-Y");
$filename = "my{$date}.json";

if(file_put_contents("json/{$filename}",$json_data)){
    echo $filename. " is created ";
}else{
    echo "Some think went to wrong.";
}

?>