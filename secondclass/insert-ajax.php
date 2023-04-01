<?php
$con=mysqli_connect("localhost","root","","test");

// if($_SERVER['REQUEST_METHOD']=='POST'){
    $FNAME=$_POST['first_name'];
    $LNAME=$_POST['last_name'];

    $sql = "INSERT INTO `students` (`sl`, `first_name`, `last_name`, `datetime`) VALUES (NULL, '$FNAME', '$LNAME', current_timestamp());";

    $result=mysqli_query($con,$sql);

    echo "Data added successfull !";
// }
?>