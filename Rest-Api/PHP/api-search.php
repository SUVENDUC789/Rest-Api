<?php

    header("Content-Type: application/json");
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Authorization,Access-Control-Allow-Methods,X-Requested-With");

    $data = json_decode(file_get_contents("php://input"), TRUE);
    $student_search = $data["search"];

    include "dbcon.php";

    $sql = "SELECT * FROM `students` WHERE first_name LIKE '%{$student_search}%' OR last_name LIKE '%{$student_search}%'";
 
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        $output = json_encode($data);
        echo $output;
    }else{
        echo json_encode(array('message'=>'No data found','status'=> FALSE));
    }

?>