<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Authorization,Access-Control-Allow-Methods,X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), TRUE);
    $student_first_name = $data["first_name"];
    $student_last_name = $data["last_name"];
    $student_gender = $data["gender"];

    include "dbcon.php";

    $sql = "INSERT INTO `students` (`sl`, `first_name`, `last_name`, `datetime`, `gender`) VALUES (NULL, '{$student_first_name}', '{$student_last_name}', current_timestamp(), '{$student_gender}');";


    if(mysqli_query($conn,$sql)){
        echo json_encode(array('message'=>'Data inserted successfull.','status'=> TRUE));
    }else{
        echo json_encode(array('message'=>'Not Inserted.','status'=> FALSE));
    }

?>