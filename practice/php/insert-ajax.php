<?php
$con = mysqli_connect("localhost","root","","test");
// echo var_dump($con);
?>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $fname=$_POST['fn'];
    $lname=$_POST['ln'];

    $sql = "INSERT INTO `students` (`sl`, `first_name`, `last_name`, `datetime`) VALUES (NULL, '$fname', '$lname', current_timestamp());";

    $result=mysqli_query($con,$sql);
}




?>