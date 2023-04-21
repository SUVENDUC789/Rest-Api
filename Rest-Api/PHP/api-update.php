<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: PUT");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Authorization,Access-Control-Allow-Methods,X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), TRUE);

    $student_id = $data["sl"];
    $student_first_name = $data["first_name"];
    $student_last_name = $data["last_name"];
    $student_gender = $data["gender"];

    include "dbcon.php";

    $sql = "UPDATE `students` SET `first_name` = '{$student_first_name}', last_name='{$student_last_name}', gender='{$student_gender}' WHERE `students`.`sl` = {$student_id}";


    if(mysqli_query($conn,$sql)){
        echo json_encode(array('message'=>'Data update successfull.','status'=> TRUE));
    }else{
        echo json_encode(array('message'=>'Not update.','status'=> FALSE));
    }

?>