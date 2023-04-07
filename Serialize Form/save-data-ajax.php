<?php

    $con = mysqli_connect("localhost","root","","test");

    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];

    $sql = "INSERT INTO `students_details` (`id`, `name`, `age`, `gender`, `country`) VALUES (NULL, '{$name}', '{$age}', '{$gender}', '{$country}');";

    $result= mysqli_query($con,$sql);

    echo "Hello {$name} data store success full !";

?>