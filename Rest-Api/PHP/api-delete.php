<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: DELETE");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Authorization,Access-Control-Allow-Methods,X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), TRUE);

    $student_id = $data["sl"];

    include "dbcon.php";

    $sql = "DELETE FROM `students` WHERE `students`.`sl` = {$student_id}";

    if(mysqli_query($conn,$sql)){
        echo json_encode(array('message'=>'Data delete successfull.','status'=> TRUE));
    }else{
        echo json_encode(array('message'=>'Not delete.','status'=> FALSE));
    }

?>