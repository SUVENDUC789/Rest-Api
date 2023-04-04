<?php
$con = mysqli_connect("localhost","root","","test");

if($_SERVER['REQUEST_METHOD']=='POST'){
    $ID=$_POST['id'];

    $sql='DELETE FROM students WHERE SL='.$ID.'';
    $RESULT = mysqli_query($con,$sql);
}

?>